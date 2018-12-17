<?php
/**
 * Template for displaying status content
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
  
  <?php if ( is_single() ): ?>

    <?php get_template_part( 'template-parts/entry', 'header' ); ?>

  <?php else: ?>

    <header class="entry-header">
      <div class="entry-meta">
        <?php
        printf(
          '<span>' . __( '%1$s @ %2$s', 'reginald' ) . '</span>',
          '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>',
          '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a>'
        );
        ?>

        <?php
        edit_post_link(
          sprintf(
            '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
            __( 'Edit', 'reginald' ),
            get_the_title()
          )
        );
        ?>
      </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    
  <?php endif; ?> 

  <article class="entry-content">
    <?php
    the_content();
    
    if ( is_single() ) {
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