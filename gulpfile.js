var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .copy('node_modules/sweetalert/dist/sweetalert-dev.js', 'resources/assets/js/libraries/sweetalert-dev.js')
        .copy('node_modules/sweetalert/dist/sweetalert.css', 'resources/assets/css/libraries/sweetalert.css')
        .copy('node_modules/dropzone/dist/dropzone.js', 'resources/assets/js/libraries/dropzone.js')
        .copy('node_modules/dropzone/dist/dropzone.css', 'resources/assets/css/libraries/dropzone.css')
        .copy('node_modules/jquery/dist/jquery.js', 'resources/assets/js/libraries/jquery.js')
        .copy('node_modules/lity/dist/lity.js', 'resources/assets/js/libraries/lity.js')
        .copy('node_modules/lity/dist/lity.css', 'resources/assets/css/libraries/lity.css')
        .scripts([
            'libraries/jquery.js',
            'libraries/lity.js',
            'libraries/sweetalert-dev.js',
            'libraries/dropzone.js'
        ], './public/js/libraries.js')
        .styles([
            'libraries/lity.css',
            'libraries/sweetalert.css',
            'libraries/dropzone.css'
        ], './public/css/libraries.css');
});
