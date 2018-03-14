let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
	'resources/assets/js/vendor/jquery-3.3.1.js',
	'resources/assets/js/vendor/materialize.js',
	'resources/assets/js/vendor/vue.js',
	'resources/assets/js/vendor/axios.js'
	], 'public/js/main.js');

mix.styles([
	'resources/assets/css/materialize.css',
	], 'public/css/main.css');

//Login
mix.js([
	'resources/assets/js/module/login.js'
	], 'public/js/module/login.js');
