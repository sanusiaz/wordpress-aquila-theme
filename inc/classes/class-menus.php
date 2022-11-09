<?php
    /**
     * Register Menus
     *
     * @package Aquila
     */

namespace AQUILA_THEME\Inc;
class Menus {
    use  \AQUILA_THEME\Inc\Traits\Singleton;

    protected function __construct() {
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus() {
        register_nav_menus(
            [
                'aquila-header-menu' => esc_html__( 'Header Menu', 'aquila' ),
                'aquila-footer-menu' => esc_html__( 'Footer Menu', 'aquila' )
            ]
        );
    }

    public function get_menu_id($location) {

        $locations = get_nav_menu_locations();

        $menu_id = $locations[ $location ];
        return !empty( $menu_id ) ? $menu_id : '';
    }

}