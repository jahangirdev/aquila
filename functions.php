<?php
/**
 * Theme functions
 *
 * @package Aquila
 */
if(! defined('AQUILA_PATH_DIR')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}
require_once AQUILA_DIR_PATH.'/inc/helpers/autoloader.php';

function aquila_get_theme_instance(){
   \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();

add_theme_support('title-tag');
function aquila_enqueue_scripts(){
//    register styles
    wp_register_style("bootstrap-css", get_template_directory_uri().'/assets/libraries/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_register_style('stylesheet', get_stylesheet_uri(),array(),filemtime(get_stylesheet_directory().'/style.css'),'all');
    wp_register_style("another-style", get_template_directory_uri().'/assets/css/another.css', array(), filemtime(get_template_directory().'/assets/css/another.css'), 'all');

//    Register scripts
    wp_register_script("bootstrap-js", get_template_directory_uri().'/assets/libraries/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    wp_register_script("main-js", get_template_directory_uri().'/assets/js/main.js', array(), filemtime(get_template_directory().'/assets/js/main.js'), true);

//    enqueue styles
    wp_enqueue_style("bootstrap-css");
    wp_enqueue_style("stylesheet");
    wp_enqueue_style("another-style");

//    enqueue scripts
    wp_enqueue_script("bootstrap-js");
    wp_enqueue_script("main-js");
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');