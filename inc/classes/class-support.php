<?php
    /**
     * Add THEME Supports
     *
     * @package Aquila
     */
    
namespace AQUILA_THEME\Inc;

class Support {
    use \AQUILA_THEME\Inc\Traits\Singleton;

    protected function __construct() {

        $this->setup_theme_supports();
        add_action('after_setup_theme', [$this, 'setup_theme_supports']);
    }


    public function setup_theme_supports() {
        add_theme_support('title-tag');
        
        // Add Custom Logo Support
        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => [ 'site-title', 'site-description' ],
            'unlink-homepage-logo' => true,
        ) );

        add_theme_support('custom-background', [
            'default-color' => '#216ea7'
        ]);

        // adding theme support for posts thumbnails
        add_theme_support('post-thumbnails');

        // adding theme support for refresh widgets
        add_theme_support('customize-selective-refresh-widgets');

        // add thee supports for adding posts / feed links
        add_theme_support('automatic-feed-links');

        add_theme_support('html5', [
            'contact-form',
            'search-submit',
            'caption',
            'script',
            'gallery',
            'comment-list',
            'style'   
        ]);

        // Add Editors Block Stylings
        add_editor_style();
        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        global $content_width;

        if ( !isset($content_width) ) {
            $content_width = 1260;
        }

        // add menu supports
        
    }
}