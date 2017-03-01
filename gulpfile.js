const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-fonts');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir((mix) => {
//     mix.sass('app.scss')
//     .webpack('app.js')
//         .version('css/app.css');
              
// });
elixir(function(mix) {

    mix.copy(
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        'resources/assets/js'
    ).copy(
        'node_modules/sweetalert/dist/sweetalert-dev.js',
        'resources/assets/js/libs'
    ).copy(
        'node_modules/sweetalert/dist/sweetalert.css',
        'resources/assets/css/libs'
    );

    mix.sass('app.scss',
             'public/assets/css/app.css')
       .version('css/app.css')
       .styles([
            'libs/sweetalert.css'
        ],  'public/assets/css/libs.css')
       
       .scripts([
            'bootstrap.js'
        ],  'public/assets/js/app.js')
        .scripts([
            'libs/sweetalert-dev.js'
        ],  'public/assets/js/libs.js');
});
