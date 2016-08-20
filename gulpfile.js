const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    mix.sass([
        './node_modules/font-awesome/scss/font-awesome.scss',
        'app.scss'
    ])
        .copy('./node_modules/font-awesome/fonts', 'public/fonts')
        .webpack('app.js')
        .scripts([
            './node_modules/jquery/dist/jquery.js',
            './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        ]);
});
