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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/bootstrap-v4-rtl.css',
    'resources/assets/css/diamond-admin.css',
    'resources/assets/css/fonts.css',
    'resources/assets/css/rtl/bootstrap-rtl.css',
    'resources/assets/css/sb-admin-2.css',
    'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
    'resources/assets/vendor/metisMenu/metisMenu.min.css',
    'resources/assets/vendor/datatables-plugins/dataTables.bootstrap.css',
    'resources/assets/vendor/datatables-responsive/dataTables.responsive.css',
    'resources/assets/vendor/font-awesome/css/font-awesome.min.css',
    'resources/assets/css/sb-admin-2.css',


], 'public/css/admin.css');

mix.scripts([
    'resources/assets/vendor/jquery/jquery.min.js',
    'resources/assets/o_js/persianumber.js',
    'resources/assets/vendor/bootstrap/js/bootstrap.min.js',
    'resources/assets/vendor/metisMenu/metisMenu.min.js',
    'resources/assets/vendor/datatables/js/jquery.dataTables.min.js',
    'resources/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js',
    'resources/assets/vendor/datatables-responsive/dataTables.responsive.js',
    'resources/assets/o_js/sb-admin-2.js',
    'resources/assets/o_js/jsrecall.js'



], 'public/admin/js/admin.js');