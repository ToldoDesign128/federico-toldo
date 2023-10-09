// webpack.mix.js
let mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('css/style.scss', 'style.css')
  .tailwind('tailwind.config.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});