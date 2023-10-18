// webpack.mix.js
let mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('css/style.scss', 'style.css')
  .tailwind('tailwind.config.js');

mix.combine(['js/js-parts/dark-mode.js', 'js/js-parts/menu.js', 'js/js-parts/archive.js'], 'js/script.js')
  .minify('js/script.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});