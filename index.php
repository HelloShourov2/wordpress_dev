<?php
/**
 * Main template file
 * 
 * @package mytheme
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site_main mt-5">

        <div class="container">
            <?php
              if(is_home() && ! is_front_page(  )){
            ?>
            <header class="mb-5">
                <h1><?php single_post_title(); ?></h1>
            </header>
            <?php
              }
            ?>
            <div class="row">
                <?php 
                if (have_posts() ) : ?>

                <!-- the loop -->
                <?php while (have_posts() ) : the_post(); ?>

                <div class="col-lg-4 col-md-3 col-sm-1">
                    <?php get_template_part('template-parts/content'); ?>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>
                <?php else :
                  get_template_part('template-parts/non-content');
                endif;
                ?>
            </div>
        </div>
        <?php
  ?>
    </main>
</div>

<?php
get_footer();