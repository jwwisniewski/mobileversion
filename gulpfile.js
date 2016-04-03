var elixir = require('laravel-elixir');
var paths = {
  'jquery': '/bower_components/jquery/dist',
  'bootstrap': '/bower_components/bootstrap/dist',
  'placeholders': '/bower_components/placeholders/dist'
};

elixir(function (mix) {
  mix
          .scripts([
            paths.jquery + '/jquery.js',
            paths.bootstrap + '/js/bootstrap.js',
            paths.placeholders + '/placeholders.js',
          ], 'public/js/vendor.js', './')
          .scripts([
            'app.js'
          ], 'public/js/app.js')
          .styles([
            paths.bootstrap + '/css/bootstrap.css',
          ], 'public/css/vendor.css', './')
          .styles(['icomoon/style.css', 'theme.css'], 'public/css/theme.css')
          .less(['app.less'], 'public/css/app.css')
          .version(['js/vendor.js', 'js/app.js', 'css/vendor.css','css/theme.css', 'css/app.css'])
          .copy('resources/assets/css/icomoon/fonts', 'public/build/css/fonts')
          ;
});