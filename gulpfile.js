var gulp            = require('gulp');
var del             = require('del');
var plugins         = require('gulp-load-plugins')({ camelize: true });
var browserSync 	= require('browser-sync');
var reload      	= browserSync.reload;

theme = {

	name: 'themeTextDomain'

},

styles = {

	src:    './src/assets/styles/main.scss',
	build:  './build/assets/styles/',
	dist:   './dist/' + theme.name + '/assets/styles/'

},

scripts = {

	src:    './src/assets/scripts/**/*',
	build:  './build/assets/scripts/',
	dist:   './dist/' + theme.name + '/assets/scripts/'

},

images = {

	src:    './src/assets/images/',
	build:  './build/assets/images/',
	dist:   './dist/' + theme.name + 'assets/images/'

};

// set url for browser-sync
// set your own if you dont want to use 'localhost/themeTextDomain'
var bsProxy = 'localhost/' + theme.name;

// build styles
gulp.task('styles', function() {

	gulp.src(styles.src)
		.pipe(plugins.plumber())
		.pipe(plugins.sourcemaps.init())
		.pipe(plugins.sass())
		.pipe(plugins.autoprefixer({
			browsers: ['last 2 versions', 'ie 8', 'ie 9', 'android 2.3', 'android 4', 'opera 12']
		}))
		.pipe(plugins.minifyCss())
		.pipe(plugins.sourcemaps.write('.'))
		.pipe(gulp.dest(styles.build))
		.pipe(plugins.rename({suffix: '.min'}));

});


// dist styles
gulp.task('styles-dist', function() {

	gulp.src(styles.src)
		.pipe(plugins.sourcemaps.init())
		.pipe(plugins.sass())
		.pipe(plugins.autoprefixer({
			browsers: ['last 2 versions', 'ie 8', 'ie 9', 'android 2.3', 'android 4', 'opera 12']
		}))
		.pipe(plugins.minifyCss())
		.pipe(plugins.sourcemaps.write('.'))
		.pipe(gulp.dest(styles.dist))
		.pipe(plugins.rename({suffix: '.min'}));

});


// build scripts
gulp.task('scripts', function() {

	gulp.src(scripts.src)
		// .pipe(plugins.sourcemaps.init())
		.pipe(plugins.uglify())
		// .pipe(plugins.sourcemaps.write, '.')
		.pipe(plugins.concat('main.min.js'))
		.pipe(gulp.dest(scripts.build));

});

// dist scripts
gulp.task('scripts-dist', function() {

	gulp.src(scripts.src)
		// .pipe(plugins.sourcemaps.init())
		.pipe(plugins.uglify())
		// .pipe(plugins.sourcemaps.write, '.')
		.pipe(plugins.concat('main.min.js'))
		.pipe(gulp.dest(scripts.dist));

});

// build images
gulp.task('images', function() {

	gulp.src(images.src+'**/*')
		.pipe(plugins.imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true }))
		.pipe(gulp.dest(images.build));

});

// dist images
gulp.task('images-dist', function() {

	gulp.src(images.src+'**/*')
		.pipe(plugins.imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true }))
		.pipe(gulp.dest(images.dist));

});

// move other files for build
gulp.task('move', function() {

	gulp.src(['src/**/*.php', 'src/style.css'])
		.pipe(plugins.changed('build/'))
		.pipe(gulp.dest('build/'));

});

// move other files for dist
gulp.task('move-dist', function() {

	gulp.src(['src/**/*.php', 'src/style.css'])
		.pipe(gulp.dest('dist/'));

});

// clean the build
gulp.task('clean', function() {

	del(['build/'], function (err, deletedFiles) {
		console.log('Folders deleted:', deletedFiles.join(', '));
	});

});

// clean the dist
gulp.task('clean-dist', function() {

	del(['dist/'], function (err, deletedFiles) {
		console.log('Folders deleted:', deletedFiles.join(', '));
	});

});

// setup browser-sync
gulp.task('browser-sync', function() {

    browserSync({
        proxy: "localhost/ssj/"
    });

});

// reload browser-sync
gulp.task('bs-reload', function () {

    browserSync.reload();

});

// watch for file changes
gulp.task('watch', ['browser-sync'], function() {

	gulp.watch('src/assets/styles/**/*.scss', ['styles', 'bs-reload']);
	gulp.watch(['src/**/*.php', 'src/style.css'], ['move', 'bs-reload']);
	gulp.watch('src/assets/scripts/**/*.js', ['scripts', 'bs-reload']);
	gulp.watch('src/assets/images/**/*', ['images', 'bs-reload']);

});

// main tasks that put everything together
gulp.task('default', ['build', 'browser-sync']);
gulp.task('build', ['styles', 'scripts', 'images', 'move']);
gulp.task('dist', ['styles-dist', 'scripts-dist', 'images-dist', 'move-dist']);
