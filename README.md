Bonsai
======
_(Work in Progress)_

WordPress starter theme using Gulp, Foundation & SASS.

## Goals

* Quickly develop WordPress themes that can be used by anyone.
* Develop custom WordPress sites for invidual use.

## Features

* [Gulp](http://gulpjs.com/) for compiling SASS to CSS, live reloading, concatenating and minifying files
* [Bower](http://bower.io/) for front-end package management
* [Foundation 5](http://foundation.zurb.com/)
* Uses [WordPress Coding Standards](https://make.wordpress.org/core/handbook/coding-standards/)
* ARIA roles and microformats
* [WooCommerce ready (coming soon)](http://www.woothemes.com/woocommerce/)
* [bbPress ready (coming soon)](http://www.bbpress.com)

## Installation

Install gulp and bower globally if not already installed.
```bash
npm install gulp -g
npm install bower -g
```

Install node modules and bower components. (This will run bower install)
```bash
npm install
```

Install [LiveReload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) for Chrome


## Gulp Commands

* `gulp` - build the project once
* `gulp watch` - watch for file changes, build the assets, run livereload
* `gulp dist` - compile all/ move all files ready for production

## Organization
Brief overview of the folders used in Bonsai. Gulp is used to generate the `build` and `dist` folders where the compiled & optimized files live.

* `src/`: Edit files here. All raw sass, images, php files are here.
* `build/`: Used for development of the theme. SASS is compiled here. Images are compressed and placed here. `gulp` and `gulp watch` will create the buld folder.
* `dist/`: The distribution version of the theme lives. `gulp dist` creates the distribution.
* `dist/theme`: This is the final code files with no source maps, all assets are optimized.

### Todo

* finish gulpfile (js minify/ concat)
* add favicons codes
* add woocommerce templates
* add screenshot.png
* pass wordpress theme test
* make sure themeforest rules are accounted for [themeforest](https://help.market.envato.com/hc/en-us/articles/202822450-WordPress-Theme-Submission-Requirements)
* add comments.php template
* setup js and wp_enque for js. Also setup way to grab vendor js and minify


### Credits

I was inspired by the following

* [Roots Starter Theme](https://github.com/roots/roots)
* [WordPress Gulp Sass Starter Kit](https://github.com/synapticism/wordpress-gulp-bower-sass)
* [Bones](https://github.com/eddiemachado/bones)

### License

Copyright 2014 [Ross Dallaire](http://rdallaire.com). GNU General Public License v2 or later http://www.gnu.org/licenses/gpl-2.0.html
