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
    <section class="main-content">
        <div class="container">
            <div class="row">
                <?php
                while( have_posts()) : the_post();
                get_template_part('template-parts/content-loop');
                endwhile;
                ?>
            </div>
        </div>
        <div class="container">
            <?php aquila_pagination(); ?>
        </div>
    </section>
    <?php
    else:
        get_template_part( 'template-parts/content-none' );
    endif;
    ?>
</main>

<?php get_footer(); ?>

