let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
    './node_modules/jquery/dist/jquery.js',
    './node_modules/popper.js/dist/umd/popper.js',
    './node_modules/bootstrap/dist/js/bootstrap.js',
    ], 'public/js/start.js')
    .scripts([
        './node_modules/selectric/src/jquery.selectric.js',
        './node_modules/sweetalert2/dist/sweetalert2.all.min.js',
    ], 'public/js/libs.js')
    // .copy('./resources/assets/libs/fontawesome/webfonts', 'public/webfonts')
    .js('resources/assets/js/bootstrap-theme-et/app.js', 'public/js/bootstrap-theme-et.js')
    .sass('resources/assets/sass/all.scss', 'public/css/all.css')
   .sass('resources/assets/sass/bootstrap-theme-et/app.scss', 'public/css/bootstrap-theme-et.css');

mix.browserSync({
    proxy:  // проксирование вашего удаленного сервера, не важно на чем back-end
        {
            target: "http://bwt/",
            ws: true
        },
    logPrefix: 'bwt', // префикс для лога bs, маловажная настройка
    host: 'bwt', // можно использовать ip сервера
    port: 3000, // порт через который будет проксироваться сервер
    // open: 'external', // указываем, что наш url внешний
    notify: true,
    ghost: true,
    // httpModule: 'http2',
    // https: {
    //     key: "./ssl/privkey.pem",
    //     cert: "./ssl/fullchain.pem",
    // },
});