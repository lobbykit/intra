<?php
namespace LobbyKit\Intra;

class Assets
{

    public static function get($file)
    {
        return get_stylesheet_directory_uri().'/assets/'.$file;
    }

    public static function enqueueScripts()
    {
        $version = time();
        if (!WP_DEBUG) {
            $theme = wp_get_theme();
            $version = $theme->version;
        }

        wp_enqueue_style('modular-admin-vendor-css', \assets('css/vendor.css'), [], $version);
        wp_enqueue_style('modular-admin-css', \assets('css/app.css'), [], $version);
        wp_enqueue_script('modular-admin-vendor-js', \assets('js/vendor.js'), [], $version, true);
        wp_enqueue_script('modular-admin-js', \assets('js/app.js'), [], $version, true);
        wp_enqueue_script('vue-js', \assets('js/vue.min.js'), [], $version, true);

        if (is_user_logged_in()) {
            // logged in specific scripts
        } else {
            $data = [
                'waiting_message' => __('Please, wait for response...', 'intra'),
                'ajax_url'        => admin_url('admin-ajax.php'),
                'nonce'           => wp_create_nonce('lobbykit'),
            ];
            wp_enqueue_script('unauthenticated-js', \assets('js/unauthenticated.js'), [], $version, true);
            wp_localize_script('unauthenticated-js', 'wpdata', $data);
        }
    }
}
