<?php 
    /**
     * Theme Functions
     *
     * @package Aquila
     */
    
    if ( !defined(' AQUILA_DIR_PATH ') ) {
        define( 'AQUILA_DIR_PATH', untrailingslashit(get_template_directory()) );
    }

    if ( !defined( 'AQUILA_DIR_URI' ) ) {
        define( 'AQUILA_DIR_URI', untrailingslashit(get_template_directory()) );
    }
    
    require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';


    function aquila_get_theme_instance() {

        // Get theh traits get_instance from the main AQUILA_THEME Class
        \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
    }

    aquila_get_theme_instance();
    
    $version = filemtime(get_template_directory() . '/style.css');
    $GLOBALS['AQUILA_VERSION'] = $version;

 ?>