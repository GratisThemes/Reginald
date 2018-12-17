<?php
/**
 * Template for displaying search results
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">
  
  <header class="page-header">
    <?php
    if ( have_posts() ) {
      printf(
        '<h3' . __( 'Search results for: %s', 'reginald' ) . '</h3>',
        '<span>' . esc_html( get_search_query() ) . '</span>'
      );
    } else {
      printf(
        '<h3>' . __( 'Nothing found', 'reginald' ) . '</h3>'
      );
    }
    ?>
  </header>

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content', 'excerpt');
    }

    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'reginald' ) . '</span>',
      'next_text' => __( 'Next', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Next page', 'reginald' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'reginald' ) . '</span>'
    ) );
  
  } else {
    
    get_template_part( 'template-parts/content', 'none');
  
  }
  ?>
</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>