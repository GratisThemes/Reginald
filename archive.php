<?php
/**
 * Template for displaying archives
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">

  <header class="page-header">
    <?php the_archive_title( '<h3>', '</h3>' ); ?>
    <?php the_archive_description(); ?>
  </header>

  <?php if ( have_posts() ): ?>
  
    <?php while ( have_posts() ): the_post(); ?>
  
      <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>

    <?php endwhile; ?>

    <?php
    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'reginald' ) . '</span>',
      'next_text' => __( 'Next', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Next page', 'reginald' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'reginald' ) . '</span>'
    ) );
    ?>

  <?php else: ?>
    
    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif;?>
  
</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>