const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .postCss('resources/assets/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'))

    .styles(['resources/assets/css/bootstrap_custom.css'
    ], 'public/css/bootstrap_custom.css')
    .styles(['resources/assets/css/appbootstrap.css'
    ], 'public/css/appbootstrap.css')
    .styles(['resources/assets/css/owl.carousel.min.css'
    ], 'public/frontend/assets/css/owl.carousel.min.css')
    .styles(['resources/assets/css/style.carousel.css'
    ], 'public/frontend/assets/css/style.carousel.css')
    .styles(['resources/assets/css/bootstrap.min.css'
    ], 'public/frontend/assets/css/bootstrap.min.css')
    .styles(['resources/assets/css/reset.css'
    ], 'public/frontend/assets/css/reset.css')
    .styles(['resources/assets/css/style.css'
    ], 'public/frontend/assets/css/style.css')
    .styles(['resources/assets/css/fontawesome.min.css'
    ], 'public/frontend/assets/css/fontawesome.min.css')
    .styles(['resources/assets/css/all.css'
    ], 'public/frontend/assets/css/all.css')
    
    .scripts(['resources/assets/js/jquery.js'
    ], 'public/frontend/assets/js/jquery.js')
    .scripts(['resources/assets/js/script.js'
    ], 'public/frontend/assets/js/script.js')
    .scripts(['resources/assets/js/owl.carousel.min.js'
    ], 'public/frontend/assets/js/owl.carousel.min.js')
    .scripts(['resources/assets/js/owl.carousel.js'
    ], 'public/frontend/assets/js/owl.carousel.js')
    .scripts(['resources/assets/js/bootstrap.js'
    ], 'public/frontend/assets/js/bootstrap.js')
    .scripts(['resources/assets/js/bootstrap.bundle.min.js'
    ], 'public/frontend/assets/js/bootstrap.bundle.min.js')
    .scripts(['resources/assets/js/bootstrap.min.js'
    ], 'public/frontend/assets/js/bootstrap.min.js')
    .scripts(['resources/assets/js/popper.min.js'
    ], 'public/frontend/assets/js/popper.min.js')
    .scripts(['resources/assets/js/all.js'
    ], 'public/frontend/assets/js/all.js')
    .scripts(['resources/assets/js/Chart.js'
    ], 'public/frontend/assets/js/Chart.js')
    
    .copyDirectory('resources/assets/images', 'public/frontend/assets/images')
    .copyDirectory('resources/assets/css/fonts', 'public/css/fonts')
    ;
