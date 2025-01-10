const mix = require('laravel-mix');

mix
  .js('src/main.js', 'a1a.bundle.js')
  .react()
  .sass('src/scss/main.scss', 'css/a1a.bundle.css') 
  .sass('src/scss/admin.scss', 'css/a1a-admin.bundle.css')
  .setPublicPath('dist')