<?php
/**
 * Template for displaying content
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    <?php reginald_entry_meta(); ?>
    <?php edit_post_link(); ?>
  </header>

  <?php the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php
    $reginald_gallery = get_post_gallery();

    if ( $reginald_gallery ) {
      echo $reginald_gallery; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    } else {
      the_content();
    }
    ?>
  </section><!-- .entry-content -->

</article>
