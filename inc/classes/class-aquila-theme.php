<?php 
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        // load all classes
        Assets::get_instance();
        Support::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {

    
    }

}