<?php
/**
 * Blog post header component
 * @package Aquila
 */
?>
<?php
$post_id = get_the_ID();
$post_thumbnail = get_the_post_thumbnail($post_id);
if( $post_thumbnail ){
    ?>
    <a href="<?php esc_url( get_permalink() ); ?>">
        <?php
        the_post_custom_thumbnail(
            $post_id,
            'featured-large',
            [
                'sizes' => '(max-width:590px) 590px, 425px',
                'class' => 'attachment-featured-large card-img-top'
            ]
        );
        ?>
    </a>
<?php
}
?>
