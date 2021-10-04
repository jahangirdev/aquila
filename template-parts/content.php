<?php
/**
 * Template part for displaying posts on post loop
 * @package Aquila
 */
?>
<div class="col-lg-4 col-md-6 col-sm-12">
    <article id="post-<?php the_ID(); ?>">
        <div class="card">
            <?php
            get_template_part('template-parts/components/blog/entry-header');
            get_template_part('template-parts/components/blog/entry-meta');
            get_template_part('template-parts/components/blog/entry-content');
            get_template_part('template-parts/components/blog/entry-footer');
            ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </article>
</div>