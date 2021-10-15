<?php
/**
 * Block patterns class
 * @package Aquila
 */
namespace AQUILA_THEME\inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns{
    use Singleton;
    protected function __construct(){
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        //actions and filters
        add_action('init', [$this, 'register_block_patterns']);
    }
    public function register_block_patterns() {
        if( function_exists('register_block_pattern') ) {
            register_block_pattern(
                'aquila/cover',
                [
                    'title' => __('Aquila Cover', 'aquila'),
                    'description' => __( 'Aquila cover block with image and text', 'aquila' ),
                    'content' => '<!-- wp:cover {"url":"http://localhost/wp-theme/wp-content/uploads/2021/10/Conference_growth-2-.png","id":65,"contentPosition":"center center","align":"wide"} -->
                                    <div class="wp-block-cover alignwide has-background-dim"><img class="wp-block-cover__image-background wp-image-65" alt="" src="http://localhost/wp-theme/wp-content/uploads/2021/10/Conference_growth-2-.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
                                    <h1 class="has-text-align-center has-huge-font-size">Hi, My name is Jahangir Alam</h1>
                                    <!-- /wp:heading -->
                                    
                                    <!-- wp:paragraph {"align":"center"} -->
                                    <p class="has-text-align-center">I am a professional web developer and wordpress expert. I know HTML, CSS, JavaScript, Bootstrap, JQuery, PHP, Wordpress, Wordpress Theme Development etc. I am reliable, adaptible and self motivated. I can customize and optimize wordpress at any level you may need.</p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:buttons {"contentJustification":"center"} -->
                                    <div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
                                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Hire Me</a></div>
                                    <!-- /wp:button --></div>
                                    <!-- /wp:buttons --></div></div>
                                    <!-- /wp:cover -->',
                ]
            );
        }
    }

}
