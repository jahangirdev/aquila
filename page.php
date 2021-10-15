<?php
/**
 * Main template file
 * @package Aquila
 */
get_header();
?>
<main id="main" class="site-main" role="main">
    <?php
    if( have_posts() ) :
        if( is_home() && ! is_front_page()){
            ?>
            <section class="banner py-5">
                <div class="container">
                    <h2 class="page-title"><?php echo single_post_title(); ?></h2>
                </div>
            </section>
            <?php
        }
        ?>
        <section class="main-content py-5">
            <div class="container">
                        <?php
                        while( have_posts()) : the_post();
                            ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content(); ?></div>
                            <?php
                        endwhile;
                        ?>
            </div>
        </section>
    <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>

