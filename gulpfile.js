const gulp = require('gulp');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');

const uglify = require('gulp-uglify');
const cssnano = require('gulp-cssnano');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const del = require('del');
const runSequence = require('run-sequence');
const gulpIf = require('gulp-if');
var useref = require('gulp-useref');

gulp.task('default', function (callback) {
  runSequence(['connect-sync'],
    callback
  );
});

gulp.task('build', function (callback) {
  runSequence('clean:prod',
    ['minify', 'images'],
    callback
  );
});

gulp.task('connect-sync', function () {
  const mainFiles = ['**/*.php', '**/*.html', '**/*.js', '**/*.css'];
  connect.server({}, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch(mainFiles).on('change', function () {
    browserSync.reload();
  });
});

gulp.task('minify', function () {
  return gulp.src(['**/*.php', '**/*.html'])
    .pipe(useref())
    .pipe(gulpIf('**/*.js', uglify()))
    .pipe(gulpIf('**/*.css', cssnano()))
    .pipe(gulp.dest('prod/'));
});

gulp.task('images', function () {
  return gulp.src('img/*.+(png|jpg|jpeg|gif|svg)')
    .pipe(cache(imagemin({
      interlaced: true
    })))
    .pipe(gulp.dest('prod/img'));
});

gulp.task('clean:prod', function () {
  return del.sync('prod');
});

gulp.task('cache:clear', function (callback) {
  return cache.clearAll(callback);
});