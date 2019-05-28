let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Compile Scss & Javascript ( Laravel-Mix )
 |--------------------------------------------------------------------------
 |
 | Compile SCSS Stylesheets and Minify your styles with Webpack.
 | Compile JavaScript scripts and Minify your scripts with Webpack.
 |
 */

mix.js('src/js/app.js', 'dist/js/').sass('src/scss/app.scss', 'dist/css/');
