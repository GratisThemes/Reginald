<?php
/**
 * Template for displaying content
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
    $reginald_gallery = get_post_gallery();
    
    if ( !is_single() && $reginald_gallery ) {   
      
      echo $reginald_gallery;
    
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