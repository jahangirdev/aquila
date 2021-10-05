<?php
/**
 * Template part for displaying posts on post loop
 * @package Aquila
 */
?>
<div class="col-lg-4 col-md-6 col-sm-12 my-3">
    <article id="post-<?php the_ID(); ?>">
        <div class="card">
            <?php
            get_template_part('template-parts/components/blog/entry-header');
            ?>
            <div class="card-body">
                <?php
                get_template_part('template-parts/components/blog/entry-meta');
                get_template_part('template-parts/components/blog/entry-content');
                get_template_part('template-parts/components/blog/entry-footer');
                ?>
            </div>
        </div>
    </article>
</div>