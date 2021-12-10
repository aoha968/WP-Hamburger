var gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
var plumber = require('gulp-plumber'); // エラー時のタスク停止防止
var notify = require('gulp-notify');

gulp.task("sass", function(){
	return gulp.src("./scss/**/*.scss")
		.pipe(plumber({
			errorHandler: notify.onError('<%= error.message %>')
		}))
		.pipe(sass({outputStyle: "expanded"}))
		.pipe(gulp.dest("./public/css"))
});

gulp.task("watch", function(){
	gulp.watch("./scss/**/*.scss", gulp.series(["sass"]))
});
