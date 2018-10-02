const gulp = require('gulp');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');

const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const del = require('del');
const runSequence = require('run-sequence');
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass');
const concat = require('gulp-concat');

gulp.task('default', function (callback) {
  runSequence('sass', 'css', 'watch', callback);
});

gulp.task('build', function (callback) {
  runSequence('clean:prod', 'sass', 'css',
    ['move-html-php-to-prod', 'minify-css', 'images'],
    callback
  );
});

gulp.task('test:prod', function () {
  connect.server({ 'base': './prod' }, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
})

gulp.task('watch', ['browserSync'], function () {
  const mainFiles = ['./app/**/*.php', './app/**/*.html', './app/**/*.js'];

  gulp.watch('./app/css/*.sass', ['sass']);
  gulp.watch('./app/css/*.css', ['css']);

  mainFiles.forEach(function (file) {
    gulp.watch(file, browserSync.reload);
  });
});

gulp.task('browserSync', function () {
  connect.server({ 'base': './app' }, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
});

gulp.task('sass', function () {
  return gulp.src('./app/css/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('css', function () {
  del.sync('./app/css/main.css')
  return gulp.src('./app/css/*.css')
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(concat('main.css'))
    .pipe(gulp.dest('./app/css/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('move-html-php-to-prod', function () {
  return gulp.src(['./app/**/*.php', './app/**/*.html'])
    .pipe(gulp.dest('./prod/'));
});

gulp.task('images', function () {
  return gulp.src(['./app/img/*.+(png|jpg|jpeg|gif|svg)',
    './app/img/**/*.+(png|jpg|jpeg|gif|svg)'])
    .pipe(cache(imagemin({
      interlaced: true
    })))
    .pipe(gulp.dest('./prod/img'));
});

gulp.task('minify-css', () => {
  return gulp.src('./app/css/main.css')
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('./prod/css/'));
});

gulp.task('clean:prod', function () {
  return del.sync('./prod');
});

gulp.task('cache:clear', function (callback) {
  return cache.clearAll(callback);
});