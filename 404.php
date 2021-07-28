<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <section class="content-container">

    <header class="page-header">
      <h1><?php esc_html_e( '404 Not Found', 'reginald' ); ?></h1>
    </header>

    <article class="error-404 not-found">

      <section class="entry-content">
        <p>
          <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'reginald' ); ?>
          <br />
          <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'reginald' ); ?>
        </p>

        <?php get_search_form(); ?>

      </section><!-- .entry-content -->

    </article><!-- .error-404 -->

  </section><!-- .content-container -->

</main><!-- .site-main -->

<?php get_footer(); ?>
