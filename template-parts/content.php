<?php
/**
 * The template part for displaying content
 *
 * @package Reginald
 * @since Reginald 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>

	<div style="clear: both; ">&nbsp;</div>
</article>

<?php if( get_theme_mod( 'entry_meta_tags', true ) && has_tag() ): ?>
	<div class="tags">
		<i class="fa fa-tag"></i>
		<?php the_tags('', ', ') ?>
	</div>
<?php endif; ?>

<?php if( is_single() ){
	wp_link_pages( array(
		'before'      => '<div class="pagination"><span class="page-links-title">' . __( 'Pages:', 'reginald' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'reginald' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
} ?>

<?php ( !is_page() ) ? get_template_part('template-parts/author_bio') : false; ?>

<?php if ( is_singular( 'post' ) ):
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="screen-reader-text">' . __( 'Next post:', 'reginald' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true"></span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'reginald' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
endif; ?>
