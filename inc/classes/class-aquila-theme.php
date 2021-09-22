<?php
/**
 * Bootstrap the theme
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME{
    use Singleton;
    protected function __construct(){
        //load class
        $this->setup_hooks();
        Assets::get_instance();
    }
    protected function setup_hooks(){
        //actions and filters
    }

}
