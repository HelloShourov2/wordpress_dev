<?php
/**
 * Template content file
 * 
 * @package mytheme
 */
?>

<article id="post_details-<?php the_ID(); ?> <?php post_class(); ?>">
    <?php get_template_part('template-parts/components/blog/entry-header'); ?>
    <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
    <?php get_template_part('template-parts/components/blog/entry-content'); ?>
    <?php get_template_part('template-parts/components/blog/entry-footer'); ?>
</article>


<!-- <div class="post_img mb-4 w-100">
        <?php echo the_post_thumbnail(); ?>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php the_excerpt(); ?> -->