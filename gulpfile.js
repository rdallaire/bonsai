var gulp 			= require('gulp');
var del 			= require('del');

// loads gulp- plugins from package.json
var plugins 		= require('gulp-load-plugins')({ camelize: true });

theme = {

	name: 'theme'

},

styles = {

	src: 	'./src/assets/styles/main.scss',
	build: 	'./build/assets/styles/',
	dist: 	'./dist/' + theme.name + '/assets/styles/'

},

scripts = {

	src: 	'./src/assets/scripts/**/*',
	build: 	'./build/assets/scripts/',
	dist: 	'./dist/' + theme.name + '/assets/scripts/'

},

images = {

	src: 	'./src/assets/images/',
	build: 	'./build/assets/images/',
	dist: 	'./dist/' + theme.name + 'assets/images/'

};

// build styles
gulp.task('styles', function() {

	gulp.src(styles.src)						// grab main sass file
		.pipe(plugins.sourcemaps.init())		// start sourcemaps
		.pipe(plugins.sass())					// run sass compile
		.pipe(plugins.autoprefixer({			// auto-prefix css
			browsers: ['last 2 versions', 'ie 8', 'ie 9', 'android 2.3', 'android 4', 'opera 12']
		}))
		.pipe(plugins.minifyCss())				// minify css
		.pipe(plugins.sourcemaps.write('.'))	// write sourcemaps to new file
		.pipe(gulp.dest(styles.build))			// output css and sourcemaps
		.pipe(plugins.rename({suffix: '.min'}));// rename file to main.min.css

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

	// gulp.src(scripts.src)
		// .pipe(plugins.sourcemaps.init)
		// .pipe(plugins.uglify)
		// .pipe(plugins.sourcemaps.write, '.')
		// .pipe(gulp.dest(scripts.build))
		// .pipe(plugins.rename({suffix: '.min'}));

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

	// plugins.livereload.listen();

	// watch for sass style changes and run styles
	gulp.watch('src/assets/styles/**/*.scss', ['styles']);

	// watch for php file changes and run move
	gulp.watch(['src/**/*.php', 'src/style.css'], ['move']);

	// watch for js file changes and run scripts
	gulp.watch('src/assets/scripts/**/*.js', ['scripts']);

	// watch for changes to the images and run images
	gulp.watch('src/assets/images/**/*', ['images']);

});

// main tasks that put everything together
gulp.task('default', ['build']);
gulp.task('build', ['clean', 'styles', 'scripts', 'images', 'move']);
gulp.task('dist', ['clean', 'styles-dist', 'scripts-dist', 'images-dist', 'move-dist']);
