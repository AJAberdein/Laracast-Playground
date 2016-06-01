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
 | install node by hitting a quick npm install -----returns---->node_modules
 |
 | sass
 | less
 | scripts
 | browserify
 | copy
 | exec (executes a shell script)
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .version('css/app.css');
});
