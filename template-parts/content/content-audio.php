<?php
/**
 * Template for displaying audio content
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
    $reginald_audio_content = apply_filters( 'the_content', get_the_content() );
    $reginald_audio         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $reginald_audio_content, 'wp-playlist-script' ) ) {
      $reginald_audio = get_media_embedded_in_content( $reginald_audio_content, array( 'audio' ) );
    }

    if ( ! empty( $reginald_audio ) ) {
      foreach ( $reginald_audio as $reginald_audio_html ) {
        echo $reginald_audio_html;  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    } else {
      the_content();
    }
    ?>
  </section><!-- .entry-content -->

</article>
