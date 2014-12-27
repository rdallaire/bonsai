var gulp 			= require('gulp');					// need gulp
<<<<<<< HEAD
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

=======
var sass            = require('gulp-sass');
var sourcemaps      = require('gulp-sourcemaps');
var minifyCSS       = require('gulp-minify-css');
// var plugin 		= require('gulp-load-plugins'); 	// loads gulp- plugins from package.json

// task for all css
gulp.task('styles', function() {

	gulp.src('./assets-dev/styles/main.scss')   // grab main sass file
        .pipe(sourcemaps.init())                // start sourcemaps
        .pipe(sass())                           // run sass compile
        .pipe(minifyCSS())                      // minify css
        .pipe(sourcemaps.write('.'))            // write sourcemaps to new file
        .pipe(gulp.dest('./assets/styles/'));   // output css and sourcemaps

});

// build asssets for production ready site
gulp.task('dist', function() {



});

// watch for file changes
gulp.task('watch', function() {

    gulp.watch('assets-dev/styles/**/*.scss', ['styles']);
>>>>>>> 390d0d0b39d198825a0db1af800994efd63f5c55


});

<<<<<<< HEAD
// default gulp
=======
// default gulp task
>>>>>>> 390d0d0b39d198825a0db1af800994efd63f5c55
gulp.task('default', function() {



});
<<<<<<< HEAD
*/
=======
>>>>>>> 390d0d0b39d198825a0db1af800994efd63f5c55
