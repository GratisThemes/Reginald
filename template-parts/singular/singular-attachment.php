<?php
/**
 * Template for displaying attachments
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php reginald_entry_meta(); ?>
    <?php edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <figure class="entry-attachment wp-block-image">
      <?php
      $reginald_image_size = apply_filters( 'wporg_attachment_size', 'full' );
      echo wp_get_attachment_image( get_the_ID(), $reginald_image_size );
      ?>

      <figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>
    </figure><!-- .entry-attachment -->

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'reginald' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );
    ?>
  </section>

  <nav class="image-nav">
    <div class="image-nav__previous">
      <?php previous_image_link( false, '<i class="fa fa-long-arrow-alt-left"></i>' . __( 'Previous Image', 'reginald' ) ); ?>
    </div>
    <div class="image-nav__next">
      <?php next_image_link( false, __( 'Next Image', 'reginald' ) . '<i class="fa fa-long-arrow-alt-right"></i>' ); ?>
    </div>
  </nav><!-- .image-navigation -->

</article>
