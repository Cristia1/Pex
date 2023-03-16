const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader')

module.exports = {
  mode: 'development',
};

mix.js('resources/js/app.js', 'public/js').react()
   .vue()
   .webpackConfig({
      plugins: [
         new VueLoaderPlugin()
      ]
   })
