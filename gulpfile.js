var gulp 			= require('gulp');
var del 			= require('del');


// loads gulp- plugins from package.json
var plugins 		= require('gulp-load-plugins')({ camelize: true });

var theme = {

	name: 'theme'

};

var styles = {

	src: 	'./src/assets/styles/main.scss',
	build: 	'./build/assets/styles/',
	dist: 	'./dist/' + theme.name + '/assets/styles/'

};

var scripts = {

	src: 	'coming soon',
	build: 	'coming soon',
	dist: 	'coming soon'

};

var images = {

	src: 	'./src/assets/images/',
	build: 	'./build/assets/images/',
	dist: 	'./dist/' + theme.name + 'assets/images/'

};

// build styles
gulp.task('styles', function() {

	gulp.src(styles.src)						// grab main sass file
		.pipe(plugins.sourcemaps.init())		// start sourcemaps
		.pipe(plugins.sass())					// run sass compile
		.pipe(plugins.minifyCss())				// minify css
		.pipe(plugins.sourcemaps.write('.'))	// write sourcemaps to new file
		.pipe(gulp.dest(styles.build))			// output css and sourcemaps
		.pipe(plugins.rename({suffix: '.min'})) // rename file to main.min.css

});


// dist styles
gulp.task('styles-dist', function() {

	gulp.src(styles.src)						// grab main sass file
		.pipe(plugins.sass())					// run sass compile
		.pipe(plugins.minifyCss())				// minify css
		.pipe(gulp.dest(styles.dist))			// output css and sourcemaps
		.pipe(plugins.rename({suffix: '.min'})) // rename file to main.min.css

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

// move other files for build
gulp.task('move', function() {

	// move all php files and style.css
	gulp.src(['src/**/*.php', 'src/style.css'])
		.pipe(gulp.dest('build/'));

});

// move other files for dist
gulp.task('move-dist', function() {

	// move all php files and style.css
	gulp.src(['src/**/*.php', 'src/style.css'])
		.pipe(gulp.dest('dist/'));

});

// clean the dist and build directories
gulp.task('clean', function() {

	del(['build/', 'dist/'], function (err, deletedFiles) {
		console.log('Folders deleted:', deletedFiles.join(', '));
	});

});

// watch for file changes
gulp.task('watch', function() {

});

// main tasks that put everything together
gulp.task('default', ['build']);
gulp.task('build', ['clean', 'styles', 'scripts', 'images', 'move']);
gulp.task('dist', ['clean', 'styles-dist', 'scripts-dist', 'images-dist', 'move-dist']);
