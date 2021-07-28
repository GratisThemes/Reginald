<?php
/**
 * Template for displaying singular content
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php the_post_thumbnail( 'reginald-featured-image' ); ?>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php reginald_entry_meta(); ?>
    <?php edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <?php the_content(); ?>

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
  </section><!-- .entry-content -->

  <?php if ( has_tag() && get_theme_mod( 'entry_meta_tags', true ) ) : ?>
    <?php
    the_tags(
      '<div class="entry-tags"><span class="entry-tags__tag"><i class="fa fa-tag"></i>',
      '</span><span class="entry-tags__tag"><i class="fas fa-tag"></i>',
      '</span></div><!-- .entry-tags -->'
    );
    ?>
  <?php endif; ?>

  <?php get_template_part( 'template-parts/author-bio' ); ?>

  <?php
  the_post_navigation(
    array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post', 'reginald' ) . '</span><i class="fa fa-long-arrow-alt-left"></i>%title',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next post', 'reginald' ) . '</span>%title<i class="fa fa-long-arrow-alt-right"></i>',
    )
  );
  ?>

</article>
