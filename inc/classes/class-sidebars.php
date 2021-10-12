<?php
/**
 * Linking all stylesheets and scripts
 * @package Aquila
 */
namespace AQUILA_THEME\inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars{
    use Singleton;
    protected function __construct(){
        //load hooks
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        //actions and filters
        add_action( 'widgets_init', [$this, 'register_sidebars'] );
    }
    public function register_sidebars() {
        register_sidebar( array(
            'name' => __( 'Sidebar', 'aquila' ),
            'id' => 'main-sidebar',
            'description' => __( 'This is main sidebar. Add widgets here to show them in page sidebars', 'aquila' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ) );
        register_sidebar( array(
            'name' => __( 'Footer Sidebar', 'aquila' ),
            'id' => 'footer-sidebar',
            'description' => __( 'This is footer sidebar. Add widgets here to show them in footer', 'aquila' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ) );
    }

}

