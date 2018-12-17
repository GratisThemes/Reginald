<?php
/**
 * Template for displaying entry headers
 *
 * @package Reginald
 * @since 1.0.0
 */
?>
<header class="entry-header">
  <?php
  if ( is_single() ) {
    printf(
      '<h3>%s</h3>',
      get_the_title() === '' ? __( 'Untitled post', 'reginald' ) : get_the_title()
    );
  } else {
    printf(
      '<h5><a href="%2$s">%1$s</a></h5>',
      get_the_title() === '' ? __( 'Untitled post', 'reginald' ) : get_the_title(), 
      esc_url( get_permalink() )
    );
  }
  ?>

  <div class="entry-meta">

    <span class="entry-meta-author">
      <?php
      if ( get_theme_mod( 'entry_meta_author', true ) && !is_attachment() ) {
        printf(
          '%1$s<a href="%2$s">%3$s</a>',
          get_avatar( get_the_author_meta( 'user_email' ), 40 ),
          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
          get_the_author()
        );
      }
      ?>
    </span>

    <?php
    if ( get_theme_mod( 'entry_meta_date', true ) ) {
      printf(
        '<span class="entry-meta-date"><a href="%1$s">%2$s</a></span>',
        esc_url( get_permalink() ),
        get_the_date()
      );
    }
    ?>

    <?php
    if ( wp_attachment_is_image() ) {
      $metadata = wp_get_attachment_metadata();

      printf( '<span class="entry-meta-image-dimesions">%1$s x %2$s</span>',
        absint( $metadata['width'] ),
        absint( $metadata['height'] )
      );
    }
    ?>

    <?php
    $reginald_comment_count = get_comments_number();
    if ( $reginald_comment_count && comments_open() && get_theme_mod( 'entry_meta_comments', true ) ) {
      printf(
        '<span class="entry-meta-comments"><a href="%1$s#comments">%2$s</a></span>',
        esc_url( get_permalink() ),
        $reginald_comment_count
      );
    }
    ?>

    <?php
    if ( get_theme_mod( 'entry_meta_post_format', true ) ) {
      $reginald_post_format = get_post_format();
      if ( $reginald_post_format ) {
        printf(
          '<span class="entry-meta-post-format"><a href="%1$s">%2$s</a></span>',
          esc_url( get_post_format_link(  $reginald_post_format ) ),
          get_post_format_string( $reginald_post_format )
        );
      }
    }
    ?>

    <?php
    if ( get_theme_mod( 'entry_meta_categories', true) ) {
      $reginald_categories_list = get_the_category_list( ', ' );
      if ( $reginald_categories_list ) {
        printf(
          '<span class="entry-meta-categories">%s</span>',
          $reginald_categories_list
        );
      }
    }
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