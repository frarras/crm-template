var gulp = require('gulp');
var watchLess = require('gulp-watch-less');
var less = require('gulp-less');

gulp.task('default', function() {
  return gulp.src('less/sb-admin-2.less')
    .pipe(watchLess('less/sb-admin-2.less'))
    .pipe(less())
    .pipe(gulp.dest('dist/css'));
});
