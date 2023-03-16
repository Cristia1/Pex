const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader')

mix.js('resources/js/app.js', 'public/js').react()
   .vue()
   .webpackConfig({
      plugins: [
         new VueLoaderPlugin()
      ]
   })
