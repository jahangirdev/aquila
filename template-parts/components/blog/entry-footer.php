<?php
/**
 * Blog entry footer
 * @package Aquila
 */

$post_id = get_the_ID();
$article_terms = wp_get_post_terms( $post_id, [ 'category', 'post_tag' ] );
?>
<div class="entry-footer mt-3">
    <?php if( ! is_single() ){
        aquila_read_more();
    } ?>
    <?php
    if(! empty($article_terms) && is_array($article_terms) ){
        ?>
        <div class="entry-category py-2">
            <b>Category:</b>
        <?php
            foreach ($article_terms as $key => $article_term ) {
                ?>
                <a class="category-link text-black" href="<?php echo esc_url( get_term_link($article_term) ); ?>"><?php echo esc_html( $article_term->name ); ?></a>
            <?php
            }
        ?>
        </div>
    <?php
    }
    ?>
</div>
