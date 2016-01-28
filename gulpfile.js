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
    mix.copy('bower_components/AdminLTE/bootstrap', 'public/bootstrap');
    mix.copy('bower_components/AdminLTE/dist', 'public/dist');
    mix.copy('bower_components/AdminLTE/plugins', 'public/plugins');

    mix.copy('bower_components/Ionicons/css', 'public/plugins/ionicons/css');
    mix.copy('bower_components/Ionicons/fonts', 'public/plugins/ionicons/fonts');

    mix.copy('bower_components/font-awesome/css', 'public/plugins/font-awesome/css');
    mix.copy('bower_components/font-awesome/fonts', 'public/plugins/font-awesome/fonts');

    mix.copy('bower_components/raphael/raphael.js', 'public/plugins/raphael/raphael.js');
    mix.copy('bower_components/raphael/raphael-min.js', 'public/plugins/raphael/raphael-min.js');

    mix.copy('bower_components/moment/min', 'public/plugins/moment');
    mix.copy('bower_components/moment/moment.js', 'public/plugins/moment/moment.js');

    // mix.sass('app.scss');
});
