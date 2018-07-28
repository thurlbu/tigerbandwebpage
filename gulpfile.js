const gulp = require('gulp');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');

gulp.task('connect-sync', function () {
    connect.server({}, function () {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });

    gulp.watch('**/*.php').on('change', function () {
        browserSync.reload();
    });
});