var gulp 			= require('gulp');

// loads gulp- plugins from package.json
var plugins 		= require('gulp-load-plugins')({ camelize: true });

var theme: {

	name: 'theme'

},

styles: {

	src: 	'./src/assets/styles/main.scss',
	dist: 	'./dist/assets/styles/',
	build: 	'./build/' + theme.name + '/assets/styles/'

},

scripts: {

	src: 	'coming soon',
	dist: 	'coming soon',
	build: 	'coming soon'

}

images: {

	src: 	'./src/assets/images/',
	dist: 	'./dist/assets/images/',
	build: 	'./build/assets/images/'

};

// build styles
gulp.task('styles', function() {

	gulp.src(styles.src)			// grab main sass file
		.pipe(plugins.sourcemaps.init())                // start sourcemaps
		.pipe(plugins.sass())                           // run sass compile
		.pipe(plugins.minifyCss())                      // minify css
		.pipe(plugins.sourcemaps.write('.'))            // write sourcemaps to new file
		.pipe(gulp.dest(styles.dist));		// output css and sourcemaps

});


// dist styles
gulp.task('styles-dist', function() {

});


// build scripts
gulp.task('scripts', function() {

});

// dist scripts
gulp.task('scripts-dist', function() {

});

// build images
gulp.task('images', function() {

});

// dist images
gulp.task('images-dist', function() {

});

// clean the dist and build directories
gulp.task('clean', function() {

});

// watch for file changes
gulp.task('watch', function() {

});

// setup the build version of the theme
gulp.task('build', function() {

});

// set the default task to build
gulp.task('default', ['build']);
gulp.task('dist', ['clean', 'styles-dist'])
