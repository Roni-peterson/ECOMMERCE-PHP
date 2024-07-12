const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

   mix.styles([
      'resources/css/app.css',
      // Adicione outros arquivos CSS aqui se necessário
  ], 'public/css/app.css');
  