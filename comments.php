<?php
/**
 * Template for displaying comments
 *
 * @package Reginald
 * @since 1.0.0
 */
?>

<?php if ( post_password_required() ) return; ?>

<div id="comments" class="comments-area">
  
  <h3 class="comments-title">
    
    <?php
    $reginald_comments_number = get_comments_number();

    if ( $reginald_comments_number > 0 ) {
      printf(
        _nx(
          '%1$s thought on &ldquo;%2$s&rdquo;',
          '%1$s thoughts on &ldquo;%2$s&rdquo;',
          $reginald_comments_number,
          'comments title',
          'reginald'
        ),
        number_format_i18n( $reginald_comments_number ),
        get_the_title()
      );
    }
    ?>

  </h3><!-- #comments-title -->

  <ol class="comment-list">
    
    <?php
    wp_list_comments( array(
      'style'       => 'ol',
      'short_ping'  => true,
      'avatar_size' => 42,
    ) );
    ?>

  </ol><!-- .comment-list -->

  <?php
  the_comments_navigation( array(
    'prev_text'  =>  __( 'Older comments', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Older comments', 'reginald' ) . '</span>',
    'next_text'  =>  __( 'Newer comments', 'reginald' ) . '<span class="screen-reader-text">' . __( 'Newer comments', 'reginald' ) . '</span>',
  ) );
  ?>

  <?php
  comment_form( array(
    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
    'title_reply_after'  => '</h2>',
  ) );
  ?>

</div><!-- #comments .comments-area -->