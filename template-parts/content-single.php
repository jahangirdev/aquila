<?php
/**
 * Template part for displaying posts on post loop
 * @package Aquila
 */
?>
    <article id="post-<?php the_ID(); ?>">
            <?php
            get_template_part('template-parts/components/blog/entry-header');
            ?>
                <?php
                get_template_part('template-parts/components/blog/entry-meta');
                get_template_part('template-parts/components/blog/entry-content');
                get_template_part('template-parts/components/blog/entry-footer');
                ?>
    </article>