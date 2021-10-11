<?php
/**
 * Blog post header component
 * @package Aquila
 */
?>
<?php
$post_id = get_the_ID();
$hide_title = get_post_meta( $post_id, '_hide_page_title', true );
$heading_class = !empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';
$post_thumbnail = get_the_post_thumbnail($post_id);
if( $post_thumbnail ){
    if(is_single()){
        ?>
        <div class="featured-image mt-4">
            <a href="<?php the_permalink(); ?>">
                <?php
                the_post_custom_thumbnail(
                    $post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width:590px) 354px, 225px',
                        'class' => 'attachment-featured-large img-fluid'
                    ]
                );
                ?>
            </a>
        </div>
        <?php
    }
    else {
        ?>
        <a href="<?php the_permalink(); ?>">
            <?php
            the_post_custom_thumbnail(
                $post_id,
                'featured-thumbnail',
                [
                    'sizes' => '(max-width:590px) 354px, 225px',
                    'class' => 'attachment-featured-large card-img-top'
                ]
            );
            ?>
        </a>
        <?php
    }
}
?>
