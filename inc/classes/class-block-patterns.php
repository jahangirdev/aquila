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
        add_action( 'init', [$this, 'register_block_pattern_categories'] );
    }
    public function register_block_patterns() {
        if( function_exists('register_block_pattern') ) {


            register_block_pattern(
                'aquila/cover',
                [
                    'title' => __('Aquila Cover', 'aquila'),
                    'description' => __( 'Aquila cover block with image and text', 'aquila' ),
                    'categories' => [ 'cover' ],
                    'content' => $this->get_pattern_content( 'template-parts/patterns/cover' ),
                ]
            );
            register_block_pattern(
                'aquila/two-column',
                [
                    'title' => __('Aquila Two Column', 'aquila'),
                    'description' => __( 'Aquila two columns block with headings and texts', 'aquila' ),
                    'categories' => ['cover'],
                    'content' => $this->get_pattern_content( 'template-parts/patterns/two-column' ),
                ]
            );
        }
    }
    public function get_pattern_content( $template_path ) {
        ob_start();
        get_template_part($template_path);
        $pattern_content = ob_get_contents();
        ob_end_clean();
        return $pattern_content;
    }
    public function register_block_pattern_categories() {
        $pattern_categories = [
            'cover' => __('Cover', 'aquila'),
            'carousel' => __('Carousel', 'aquila')
        ];
        if( ! empty( $pattern_categories ) && is_array( $pattern_categories ) ) {
            foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
                register_block_pattern_category(
                    $pattern_category,
                    [ 'label' => $pattern_category_label]
                );
            }
        }
    }

}
