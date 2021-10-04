<?php
/**
 * Template part for displaying a message that posts cannot be found
 * @package Aquila
 */
?>
<section class="no-result not-found py-5">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title text-center"><?php esc_html_e('Nothing Found', 'aquila'); ?></h1>
        </header>
        <div class="page-content text-center">
            <?php if ( is_home() && current_user_can( 'publish_posts' )){
                ?>
                <p>
                    <?php
                    printf(
                        wp_kses(
                            __('Ready to publish your first post? <a href="%s">Get started here</a>', 'aquila'),
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                        ),
                        esc_url( admin_url('post-new.php') )
                    )
                    ?>
                </p>
                <?php
            }
            else if ( is_search() ){
                ?>
                <p><?php esc_html_e( 'Sorry but nothing mached your search item. Please try again with some different keywords.', 'aquila' ); ?></p>
                <?php
                get_search_form();
            }
            else {
                ?>
                <p><?php esc_html_e( 'It seems that we cannot find what you are looking for. Perhaps search can help.', 'aquila' ); ?></p>
                <?php
                get_search_form();
            }
            ?>
        </div>
    </div>
</section>
