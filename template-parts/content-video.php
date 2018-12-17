<?php
/**
 * Template for displaying video content
 *
 * @package Reginald
 * @since 1.0.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php if ( get_the_post_thumbnail() !== '' && is_single() ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'reginald-featured-image' ); ?>
    </a><!-- .post-thumbnail -->
  <?php endif; ?>

  <?php get_template_part( 'template-parts/entry', 'header' ); ?>

  <article class="entry-content">
    <?php 
    $reginald_video_content = apply_filters( 'the_content', get_the_content() );
    $reginald_video = false;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $reginald_video_content, 'wp-playlist-script' ) ) {
      $reginald_video = get_media_embedded_in_content( $reginald_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }
    
    if ( !is_single() && !empty( $reginald_video ) ) {
      
      foreach ( $reginald_video as $reginald_video_html ) {
        echo $reginald_video_html;
      }

    } else {
      
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'reginald' ),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
      ) );
    }
    ?>
  </article><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part('template-parts/entry', 'footer');
  } ?>
</section>