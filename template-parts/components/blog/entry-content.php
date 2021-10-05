<?php
/**
 * Post content component
 * @package Aquila
 */

$post_id = get_the_ID();
$hide_title = get_post_meta( $post_id, '_hide_page_title', true );
$heading_class = !empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';
?>
<h5 class="card-title <?php echo $heading_class; ?>">
    <a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h5>
