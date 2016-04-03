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

elixir(function (mix) {
  mix.sass(['bootstrap.scss'], 'public/css/bootstrap.css')
          .less(['app.less'], 'public/css/app.css')
          .styles(['icomoon/style.css'], 'public/css/icomoon.css')
          .version(['css/bootstrap.css', 'css/app.css', 'css/icomoon.css'])
          .copy('resources/assets/css/icomoon/fonts', 'public/build/css/fonts')
          ;
});
