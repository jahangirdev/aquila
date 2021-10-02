<?php
/**
 * Linking all stylesheets and scripts
 * @package Aquila
 */
namespace AQUILA_THEME\inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus{
    use Singleton;
    protected function __construct(){
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        //actions and filters
        add_action('init', [$this ,'register_menus']);
    }
    public function register_menus(){
        register_nav_menus([
            'aquila-header-menu' => __('Header Menu', 'aquila'),
            'aquila-footer-menu' => __('Footer Menu', 'aquila')
        ]);
    }
}
