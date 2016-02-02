var elixir = require('laravel-elixir');

config.assetsPath='assets';
config.publicPath='dist';

elixir(function(mix) {

    mix.sass('app.scss');

    mix.scripts([
        'app.js',
		'jquery-1.10.2.js', 
		'bootstrap.min.js',
		'bootstrap-select.js',
		'bootstrap-checkbox-radio-switch.js',
		'bootstrap-notify.js',
		'light-bootstrap-dashboard.js',
		'chartist.js',
		'demo.js'
    ]);

    mix.copy([
    	'./bower_components/font-awesome/fonts/*.*',
    	'./assets/fonts'
    	], 'dist/fonts');

    mix.copy('./assets/img', 'dist/img');

});