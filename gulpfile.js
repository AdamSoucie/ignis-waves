'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function ()
{
	return gulp.src('./framework/scss/**/**/*.scss')
		.pipe(sass({'outputStyle': 'expanded'}).on('error', sass.logError))
    	.pipe(gulp.dest('./framework/css/'));
});

gulp.task('sass:watch', function ()
{
	gulp.watch('./framework/scss/**/**/*.scss', ['sass']);
});
