<?php
namespace LobbyKit\Intra;

class Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', '\LobbyKit\Intra\Assets::enqueueScripts' );

		add_action( 'init', function() {
		});

	}

	static function get($file) {
		return get_stylesheet_directory_uri().'/dist/'.$file;
	}

	static function enqueueScripts() {

		$theme = wp_get_theme();
		$version = $theme->version;

		wp_enqueue_style( 'modular-admin-vendor-css', assets('css/vendor.css'), [], $version );
		wp_enqueue_style( 'modular-admin-css', assets('css/app.css'), [], $version );
		wp_enqueue_script( 'modular-admin-vendor-js', assets('js/vendor.js'), [], $version, true );
		wp_enqueue_script( 'modular-admin-js', assets('js/app.js'), [], $version, true );
	}
	
}

new Assets();
