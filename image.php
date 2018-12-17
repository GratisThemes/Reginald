<?php
/**
 * Template for displaying images
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-main" role="main">

  <?php while ( have_posts() ): the_post(); ?>

    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php get_template_part( 'template-parts/entry', 'header' ); ?>
      
      <article class="entry-content">
        <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
        <?php the_excerpt(); ?>
      </article><!-- .entry-content -->

    </section>

    <footer class="entry-footer">
      <div class="nav-links image-navigation">
        <div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'reginald' ) ); ?></div>
        <div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'reginald' ) ); ?></div>
      </div><!-- .nav-links -->
    </footer><!-- .entry-footer -->

    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>


  <?php endwhile; ?>


</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>