Bonsai
======

WordPress starter theme using Gulp, Foundation & SASS.

## Goals

* Quickly develop WordPress themes that can be used by anyone.
* Develop custom WordPress sites for invidual use.
* Lean compressed assets with minimal HTTP requests.

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
```
npm install gulp -g
npm install bower -g
```

Install node modules and bower components. (This will run bower install)
```
npm install
```

## Gulp Commands

* `gulp` - build the project once
* `gulp watch` - watch for file changes, build the assets, run livereload
* `gulp dist` - compile all/ move all files ready for production

## Organization
Brief overview of the folders used in Bonsai. Gulp is used to generate the `build` and `dist` folders where the compiled & optimized files live.

* `src/`: Edit files here. All raw sass, images, php files are here.
* `build/`: Used for development of the theme. SASS is compiled here. Images are compressed and placed here. `gulp` and `gulp watch` will create the buld folder. You can symlink your `build/` folder to your `themes` folder. (example below)
* `dist/`: The distribution version of the theme lives. `gulp dist` creates the distribution.
* `dist/theme`: This is the final code files with no source maps, all assets are optimized.

Symlink in windows example
```
mklink /D c:\xampp\htdocs\wordpress\wp-content\themes\my-theme c:\dev\projects\bonsai\build\
```

## Setup

(WIP)
The following names are used throughout the theme for easy search/ replace and automation with [yo-bonsai](https://github.com/rdallaire/yo-bonsai)

`themeName` > `Theme Name`

`themeHandle` > `Theme_Name`

`themeFunction` > `theme_name`

`themeTextDomain` > `theme-name`

## Todo

* add favicons codes
* add woocommerce templates
* add screenshot.png
* pass wordpress theme test
* make sure themeforest rules are accounted for [themeforest](https://help.market.envato.com/hc/en-us/articles/202822450-WordPress-Theme-Submission-Requirements)
* add comments.php template
* setup js and wp_enque for js. Also setup way to grab vendor js and minify
* setup sourcemaps for JS
* add humans.txt
* add an easier way to add more bower components (slick carousel for example)

## Changelog

0.0.2 Gulpfile setup with basic commands
0.0.1 Initial structure setup

### License

Copyright 2014 [Ross Dallaire](http://rdallaire.com). GNU General Public License v2 or later http://www.gnu.org/licenses/gpl-2.0.html
