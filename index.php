<?php
/**
 * Template for displaying landing and archive pages
 *
 * @package Reginald
 * @since   Reginald 1.0
 */

$reginald_archive_title       = '';
$reginald_archive_description = '';

if ( is_search() ) {
  $reginald_archive_title = sprintf(
    /* translators: %s: search term */
    __( 'Search results for: "%s"', 'reginald' ),
    '<span>' . get_search_query() . '</span>'
  );

} elseif ( is_archive() && ! have_posts() ) {
  $reginald_archive_title = __( 'Nothing Found', 'reginald' );

} elseif ( ! is_home() ) {
  $reginald_archive_title       = get_the_archive_title();
  $reginald_archive_description = get_the_archive_description();
}
?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <section class="content-container">

    <?php if ( $reginald_archive_title || $reginald_archive_description ) : ?>
      <header class="archive-header">
        <?php if ( $reginald_archive_title ) : ?>
          <h1><?php echo wp_kses_post( $reginald_archive_title ); ?></h1>
        <?php endif; ?>

        <?php if ( $reginald_archive_description ) : ?>
          <?php echo wp_kses_post( wpautop( $reginald_archive_description ) ); ?>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content/content', get_post_format() );
      }

      the_posts_pagination();
    } else {
      get_template_part( 'template-parts/content/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
