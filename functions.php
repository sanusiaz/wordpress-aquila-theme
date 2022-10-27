<?php 
    /**
     * Theme Functions
     *
     * @package Aquila
     */
    
    $version = filemtime(get_template_directory() . '/style.css');
    $GLOBALS['AQUILA_VERSION'] = $version;

    function aquila_enqueue_scripts() {

        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', [
            'stylesheet'
        ], $GLOBALS['AQUILA_VERSION'], 'all');

        wp_register_style('stylesheet', get_stylesheet_uri(), [], $GLOBALS['AQUILA_VERSION'], 'all');
        wp_register_script('main-js', get_template_directory_uri() . '/assets/js/index.js', $GLOBALS['AQUILA_VERSION'], true);


        wp_enqueue_style('main');
        wp_enqueue_style('stylesheet');
        wp_enqueue_script('main-js');
    }

    add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>