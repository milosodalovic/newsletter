var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .scripts(['parsley.js', 'libs/sweetalert-dev.js' ], './public/js/libs.js')

        .styles(['parsley.css', 'libs/sweetalert.css' ], './public/css/libs.css')


        // CSS Global Compulsory
        .copy('resources/assets/unify/plugins/bootstrap/css/bootstrap.min.css', 'public/unify/plugins/bootstrap/css/bootstrap.min.css')
        .copy('resources/assets/unify/plugins/bootstrap/css/bootstrap.min.css.map', 'public/unify/plugins/bootstrap/css/bootstrap.min.css.map')
        .copy('resources/assets/unify/css/app.css', 'public/unify/css/app.css')
        .copy('resources/assets/unify/css/style.css', 'public/unify/css/style.css')
        .copy('resources/assets/unify/css/blocks.css', 'public/unify/css/blocks.css')
        .copy('resources/assets/unify/css/ie8.css', 'public/unify/css/ie8.css')
        .copy('resources/assets/unify/css/one-demo.css', 'public/unify/css/one-demo.css')
        .copy('resources/assets/unify/css/one-theme.css', 'public/unify/css/one-theme.css')
        .copy('resources/assets/unify/css/plugins.css', 'public/unify/css/plugins.css')
        .copy('resources/assets/unify/css/plugins/style-switcher.css', 'public/unify/css/plugins/style-switcher.css')

        // CSS Implementing Plugins
        .copy('resources/assets/unify/plugins/animate.css', 'public/unify/plugins/animate.css')
        .copy('resources/assets/unify/plugins/line-icons', 'public/unify/plugins/line-icons')
        .copy('resources/assets/unify/plugins/font-awesome', 'public/unify/plugins/font-awesome')
        .copy('resources/assets/unify/plugins/sky-forms-pro/skyforms/css/sky-forms.css', 'public/unify/plugins/sky-forms-pro/skyforms/css/sky-forms.css')
        .copy('resources/assets/unify/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css', 'public/unify/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')

        // CSS Page Style
        .copy('resources/assets/unify/css/pages/page_log_reg_v2.css', 'public/unify/css/pages/page_log_reg_v2.css')

        // CSS Theme
        .copy('resources/assets/unify/css/theme-colors/default.css', 'public/unify/css/theme-colors/default.css')
        .copy('resources/assets/unify/css/theme-skins/dark.css', 'public/unify/css/theme-skins/dark.css')

        // CSS Customization
        .copy('resources/assets/unify/css/custom.css', 'public/unify/css/custom.css')


        // JS Global Compulsory
        .copy('resources/assets/unify/plugins/jquery/jquery.min.js', 'public/unify/plugins/jquery/jquery.min.js')
        .copy('resources/assets/unify/plugins/jquery/jquery-migrate.min.js', 'public/unify/plugins/jquery/jquery-migrate.min.js')
        .copy('resources/assets/unify/plugins/bootstrap/js/bootstrap.min.js', 'public/unify/plugins/bootstrap/js/bootstrap.min.js')

        // JS Implementing Plugins
        .copy('resources/assets/unify/plugins/back-to-top.js', 'public/unify/plugins/back-to-top.js')
        .copy('resources/assets/unify/plugins/backstretch/jquery.backstretch.min.js', 'public/unify/plugins/backstretch/jquery.backstretch.min.js')
        .copy('resources/assets/unify/plugins/jquery.parallax.js', 'public/unify/plugins/jquery.parallax.js')
        .copy('resources/assets/unify/js/plugins/style-switcher.js', 'public/unify/js/plugins/style-switcher.js')
        .copy('resources/assets/unify/plugins/sky-forms-pro/skyforms/js', 'public/unify/plugins/sky-forms-pro/skyforms/js')

        // JS Customization
        .copy('resources/assets/unify/js/custom.js', 'public/unify/js/custom.js')

        // JS Page Level
        .copy('resources/assets/unify/js/app.js', 'public/unify/js/app.js')
        .copy('resources/assets/unify/js/plugins/style-switcher.js', 'public/unify/js/plugins/style-switcher.js')

        // Other Resources
        .copy('resources/assets/unify/img/icons', 'public/unify/img/icons')
        .copy('resources/assets/unify/img/logo1-default.png', 'public/unify/img/logo1-default.png')
        .copy('resources/assets/unify/img/logo2-default.png', 'public/unify/img/logo2-default.png')
        .copy('resources/assets/unify/img/logo3-light.png', 'public/unify/img/logo3-light.png')
        .copy('resources/assets/unify/img/logo3-dark.png', 'public/unify/img/logo3-dark.png')
        .copy('resources/assets/unify/img/bg', 'public/unify/img/bg')
        .copy('resources/assets/unify/img/map-img.png', 'public/unify/img/map-img.png')
        .copy('resources/assets/unify/img/patterns/breadcrumbs.png', 'public/unify/img/patterns/breadcrumbs.png')


});
