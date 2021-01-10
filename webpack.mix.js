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

mix.js('resources/views/web/assets/js/app.js', 'public/js')
    .postCss('resources/views/web/assets/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'))

    .styles(['resources/views/web/assets/css/bootstrap_custom.css'
    ], 'public/frontend/assets/css/bootstrap_custom.css')
    .styles(['resources/views/web/assets/css/appbootstrap.css'
    ], 'public/frontend/assets/css/app.css')
    .styles(['resources/views/web/assets/css/owl.carousel.min.css'
    ], 'public/frontend/assets/css/owl.carousel.min.css')
    .styles(['resources/views/web/assets/css/style.carousel.css'
    ], 'public/frontend/assets/css/style.carousel.css')
    .styles(['resources/views/web/assets/css/bootstrap.min.css'
    ], 'public/frontend/assets/css/bootstrap.min.css')
    .styles(['resources/views/web/assets/css/reset.css'
    ], 'public/frontend/assets/css/reset.css')
    .styles(['resources/views/web/assets/css/style.css'
    ], 'public/frontend/assets/css/style.css')
    .styles(['resources/views/web/assets/css/fontawesome.min.css'
    ], 'public/frontend/assets/css/fontawesome.min.css')
    .styles(['resources/views/web/assets/css/all.css'
    ], 'public/frontend/assets/css/all.css')
    
    .scripts(['resources/views/web/assets/js/jquery.js'
    ], 'public/frontend/assets/js/jquery.js')
    .scripts(['resources/views/web/assets/js/script.js'
    ], 'public/frontend/assets/js/script.js')
    .scripts(['resources/views/web/assets/js/owl.carousel.min.js'
    ], 'public/frontend/assets/js/owl.carousel.min.js')
    .scripts(['resources/views/web/assets/js/owl.carousel.js'
    ], 'public/frontend/assets/js/owl.carousel.js')
    .scripts(['resources/views/web/assets/js/bootstrap.js'
    ], 'public/frontend/assets/js/bootstrap.js')
    .scripts(['resources/views/web/assets/js/bootstrap.bundle.min.js'
    ], 'public/frontend/assets/js/bootstrap.bundle.min.js')
    .scripts(['resources/views/web/assets/js/bootstrap.min.js'
    ], 'public/frontend/assets/js/bootstrap.min.js')
    .scripts(['resources/views/web/assets/js/popper.min.js'
    ], 'public/frontend/assets/js/popper.min.js')
    .scripts(['resources/views/web/assets/js/all.js'
    ], 'public/frontend/assets/js/all.js')
    .scripts(['resources/views/web/assets/js/Chart.js'
    ], 'public/frontend/assets/js/Chart.js')

    .scripts(['resources/views/admin/assets/js/Chart.js'
    ], 'public/backend/assets/js/chaprao.js')

    .styles(['resources/views/admin/assets/css/chaprao.css'
    ], 'public/backend/assets/css/chaprao.css')

    .scripts(['resources/views/admin/assets/js/chaprao.js'
    ], 'public/backend/assets/js/Chart.js')

    .styles([
        'resources/views/admin/assets/js/datatables/css/jquery.dataTables.min.css',
        'resources/views/admin/assets/js/datatables/css/responsive.dataTables.min.css',
        'resources/views/admin/assets/js/select2/css/select2.min.css'
    ], 'public/backend/assets/css/libs.css')

    .scripts([
        'resources/views/admin/assets/js/datatables/js/jquery.dataTables.min.js',
        'resources/views/admin/assets/js/datatables/js/dataTables.responsive.min.js',
        'resources/views/admin/assets/js/select2/js/select2.min.js',
        'resources/views/admin/assets/js/select2/js/i18n/pt-BR.js',
        'resources/views/admin/assets/js/jquery.form.js',
        'resources/views/admin/assets/js/jquery.mask.js',
    ], 'public/backend/assets/js/libs.js')
    
    .copyDirectory('resources/views/web/assets/images', 'public/frontend/assets/images')    
    .copyDirectory('resources/views/web/assets/css/fonts', 'public/frontend/assets/css/fonts')

    .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')
    .copyDirectory('resources/views/admin/assets/css/fonts', 'public/backend/assets/css/fonts')
    .copyDirectory('resources/views/admin/assets/js/datatables', 'public/backend/assets/js/datatables')
    .copyDirectory('resources/views/admin/assets/js/select2', 'public/backend/assets/js/select2')
    .copyDirectory('resources/views/admin/assets/js/tinymce', 'public/backend/assets/js/tinymce')    
    ;
