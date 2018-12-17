<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">

  <?php
  if ( have_posts() ) {
    
    while ( have_posts() ) {

      the_post();
      
      $reginald_post_format = get_post_format();

      if ( $reginald_post_format || get_theme_mod( 'display_content', false ) ) {

        get_template_part( 'template-parts/content', $reginald_post_format );

      } else {

        get_template_part( 'template-parts/content', 'excerpt' );

      }
    
    }

    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'reginald' ) . '</span>',
      'next_text' => __( 'Next', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Next page', 'reginald' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'reginald' ) . '</span>'
    ) );
  
  } else {
    
    get_template_part( 'template-parts/content', 'none' );

  }
  ?>

</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>