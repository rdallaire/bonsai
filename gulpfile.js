var gulp 			= require('gulp');					// need gulp
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


});

// default gulp task
gulp.task('default', function() {



});
