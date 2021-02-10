const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    // APP
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')

    // GUEST
    .sass('resources/sass/guest.scss', 'public/css')
    .js('resources/js/guest.js', 'public/js')

    // WELCOME
    .sass('resources/sass/view/welcome.scss', 'public/css/view')
    .js('resources/js/view/welcome.js', 'public/js/view')

    .disableSuccessNotifications()
