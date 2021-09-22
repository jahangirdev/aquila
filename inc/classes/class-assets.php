<?php
namespace AQUILA_THEME\inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    protected function __construct(){
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }
    public function register_styles() {
        //    register styles
        wp_register_style("bootstrap-css", AQUILA_DIR_URI.'/assets/libraries/bootstrap/css/bootstrap.min.css', array(), false, 'all');
        wp_register_style('stylesheet', get_stylesheet_uri(),array(),filemtime(get_stylesheet_directory().'/style.css'),'all');
        wp_register_style("another-style", AQUILA_DIR_URI.'/assets/css/another.css', array(), filemtime(get_template_directory().'/assets/css/another.css'), 'all');

        //    enqueue styles
        wp_enqueue_style("bootstrap-css");
        wp_enqueue_style("stylesheet");
        wp_enqueue_style("another-style");
    }
    public function register_scripts() {
        //    Register scripts
        wp_register_script("bootstrap-js", AQUILA_DIR_URI.'/assets/libraries/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
        wp_register_script("main-js", AQUILA_DIR_URI.'/assets/js/main.js', array(), filemtime(get_template_directory().'/assets/js/main.js'), true);

        //    enqueue scripts
        wp_enqueue_script("bootstrap-js");
        wp_enqueue_script("main-js");
    }
}
