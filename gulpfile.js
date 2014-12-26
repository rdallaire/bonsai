var gulp 			= require('gulp');					// need gulp
var plugin 			= require('gulp-load-plugins'); 	// loads gulp- plugins from package.json
// var sass			= require('gulp-sass');

// all styles tasks
gulp.task('styles', function () {

	gulp.src('assets-dev/styles/main.scss')
		.pipe(plugin.sass())
		.pipe(gulp.dest('assets/styles/'));

});

gulp.task('sass', function () {
    gulp.src('./assets-dev/styles/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets/styles/main.css'));
});


/*// watch for file changes
gulp.task('watch', function() {



});

// default gulp
gulp.task('default', function() {



});
*/
