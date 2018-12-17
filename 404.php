<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">
  <section class="error-404 not-found">
    <header class="page-header">
      <h1><?php _e( '404 Not Found', 'reginald' ); ?></h1>
    </header>

    <div class="entry-content">
      <p>
        <?php _e( 'Oops! That page can&rsquo;t be found.', 'reginald' ); ?>
        <br />
        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'reginald' ); ?>
      </p>
      <?php get_search_form(); ?>
    </div><!-- .entry-content -->
  </section><!-- .error-404 -->
</main><!-- #site-main -->

<?php get_footer(); ?>