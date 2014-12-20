Bonsai
======
_Still a WIP_

WordPress starter theme using Gulp and Foundation.

## Goals

* Quickly develop WordPress themes that can be used by anyone.
* Develop custom WordPress sites for invidual use.
* Make theme pass theme check and use WordPress coding standards.

## Features

* [Gulp](http://gulpjs.com/) for compiling SASS to CSS, live reloading, concatenating and minifying files
* [Bower](http://bower.io/) for front-end package management
* [Foundation 5](http://foundation.zurb.com/)
* Organized file and template structure
* ARIA roles and microformats
* [WooCommerce ready (coming soon)](http://www.woothemes.com/woocommerce/)
* [bbPress ready (coming soon)](http://www.bbpress.com)

## Installation

```bash
npm install
bower install
```


## Gulp Commands

* `gulp` - will build the project once
* `gulp watch` - will watch for file changes, build the assets, run livereload


## File Structure
Brief overview of the folders used in Bonsai

```
assets/             - production assets are built with Gulp
                      from assets-dev and placed here
    scripts/        - compiled, minified, concatenated JS
    styles/         - compiled, minified, concatenated CSS
    images/         - optimized images & sprites

assets-dev/         - SASS, JS, and raw images
    scripts/        - all javascript
    styles/         - all SASS, CSS and other styles
    images/         - raw images and sprites

lib/                - all of the php functions for the theme
templates/          - more php snipptets & templates
```
