<?php
/**
 * Post entry content component
 * @package Aquila
 */

$post_id = get_the_ID();
$hide_title = get_post_meta( $post_id, '_hide_page_title', true );
$heading_class = !empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';

if(is_single()){

    ?>
    <h1 class="card-title post-title <?php echo $heading_class; ?>">
        <a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <?php the_content();
    wp_link_pages( [
            'before' => '<div class="page-links">'. esc_html__('Pages:', 'aquila'),
            'after' => '</div>'
    ] );
}
else {
    ?>
    <h4 class="card-title post-title <?php echo $heading_class; ?>">
        <a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <?php aquila_the_excerpt(200); ?>
<?php
}
?>

