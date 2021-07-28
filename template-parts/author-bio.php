<?php
/**
 * Template for displaying the author's information below posts
 *
 * @package Reginald
 * @since   Reginald 2.0
 */

// Quit early if there is no information about the author to be displayed.
if ( ! (bool) get_the_author_meta( 'description' ) || ! post_type_supports( get_post_type(), 'author' ) || ! get_theme_mod( 'author_bio', true ) ) {
  return;
}
?>
<div class="author-bio">

  <?php echo get_avatar( get_the_author_meta( 'ID' ), '60' ); ?>

  <?php
  $reginald_post_author = get_the_author();

  printf(
    '<h6 class="author-bio__title">%s</h6>',
    sprintf(
      '<a href="%1$s" aria-label="%3$s">%2$s</a>',
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      $reginald_post_author, // phpcs:ignore WordPress.Security.EscapeOutput
      /* translators: %s Post author */
      sprintf( esc_attr__( 'Author: %s', 'reginald' ), $reginald_post_author ) // phpcs:ignore WordPress.Security.EscapeOutput
    )
  );
  ?>

  <p class="author-bio__description"><?php the_author_meta( 'description' ); ?></p>

</div><!-- .author-bio -->
