<?php 
    /**
     * Aquila Assets
     *
     * @package Aquila
     */

namespace AQUILA_THEME\Inc;

class Assets {
    use \AQUILA_THEME\Inc\Traits\Singleton;

    protected function __construct() {
        // load all classes under AQUILA
        $this->setup_hooks();
    }

    protected function setup_hooks() {

        // Actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
        wp_register_style('main', AQUILA_DIR_URI . '/assets/css/main.css', [
            'stylesheet'
        ], $GLOBALS['AQUILA_VERSION'], 'all');

        wp_register_style('stylesheet', get_stylesheet_uri(), [], $GLOBALS['AQUILA_VERSION'], 'all');

        // ENQUEUE styles
        wp_enqueue_style('main');
        wp_enqueue_style('stylesheet');
    }

    public function register_scripts() {
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/js/index.js', $GLOBALS['AQUILA_VERSION'], true);


        wp_enqueue_script('main-js');
    }
    
}