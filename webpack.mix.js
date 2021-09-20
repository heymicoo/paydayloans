let mix = require('laravel-mix');

mix
.js('src/js/app.js', 'js')
.sass('src/sass/app.scss', 'css')
.setPublicPath('dist')
.options({
    postCss: [
        require('tailwindcss'),
        require('autoprefixer'),
    ],
    processCssUrls: false,
});