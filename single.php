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
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <?php
                        while( have_posts()) : the_post();
                            get_template_part('template-parts/content-single');
                        endwhile;
                        previous_post_link();
                        echo "&nbsp; &nbsp; &nbsp;";
                        next_post_link();
                        ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
    else:
        get_template_part( 'template-parts/content-none' );
    endif;
    ?>
</main>

<?php get_footer(); ?>

