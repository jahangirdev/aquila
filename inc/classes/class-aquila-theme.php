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
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();
        Block_Patterns::get_instance();
    }
    protected function setup_hooks(){
        //actions and filters
        add_action('after_setup_theme', [$this,'setup_theme']);
    }
    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        add_theme_support('post-thumbnails');
        add_image_size( 'featured-thumbnail', 354, 225, true );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5',[
            'search-form',
            'comment-form',
            'gallery',
            'caption',
            'script',
            'style'
        ]);
        add_theme_support('editor-styles');
        add_editor_style('assets/css/editor.css');
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        global $content_width;
        if(! isset($content_width)){
            $content_width = 1200;
        }
    }

}
