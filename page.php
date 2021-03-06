<?php
/**
 * Template for displaying Page content
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">

  <?php while ( have_posts() ): the_post(); ?>
    
    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
    
  <?php endwhile; ?>

</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>