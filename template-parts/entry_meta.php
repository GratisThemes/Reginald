<?php
/**
 * The template part for displaying post meta data
 *
 * @package Reginald
 * @since Reginald 1.0
 */
?>
<div class="entry-meta">
	<span class="entry-meta-left">
	<?php if( get_theme_mod( 'entry_meta_author', true ) && !wp_attachment_is_image() ){
		echo get_avatar( get_the_author_meta( 'user_email' ) );// author Avatar

		printf( '<span class="entry-meta-user"><a href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
			);
	}?>
	</span>

	<span class="entry-meta-right">
		<?php // posted date
		if( get_theme_mod( 'entry_meta_date', true ) ){
			printf( '<span><i class="fa fa-calendar"></i> <a href="%1$s">%2$s</a></span>',
				esc_url( get_permalink() ),
				get_the_date()
			);
		}

		if( is_user_logged_in() ): ?>
			<span>
				<i class="fa fa-pencil"></i>
				<?php edit_post_link( __('Edit', 'reginald') ); // edit link ?>
			</span>
		<?php endif;

		// attachment image dimentions
		if( wp_attachment_is_image() ){
			$metadata = wp_get_attachment_metadata();

			printf( '<span><i class="fa fa-camera"></i> %1$s x %2$s</span>',
				absint( $metadata['width'] ),
				absint( $metadata['height'] )
			);
		}

		// comments
		$reginald_comments_count = get_comments_number();
		if( get_theme_mod( 'entry_meta_comments', true ) && $reginald_comments_count > 0 && comments_open() ){

			printf( '<span><i class="fa fa-comment-o"></i> <a href="%1$s/#comments">%2$s</a></span>',
				esc_url( get_permalink() ),
				$reginald_comments_count
			);
		}

		// post format
		$reginald_format = get_post_format();
		if ( get_theme_mod( 'entry_meta_post_format', true ) && current_theme_supports( 'post-formats', $reginald_format ) ):

			switch($reginald_format){
				case 'gallery':
				case 'image':
					$reginald_class = 'fa-image';
					break;

				case 'video':
					$reginald_class = 'fa-video-camera';
					break;

				case 'quote':
					$reginald_class = 'fa-quote-right';
					break;

				case 'link':
					$reginald_class = 'fa-link';
					break;

				case 'status':
					$reginald_class = 'fa-exclamation';
					break;

				case 'audio':
					$reginald_class = 'fa-music';
					break;

				case 'chat':
					$reginald_class = 'fa-comments';
					break;

				default:
					$reginald_class = 'fa-file-o';
					break;
			}

			printf( '<span class="entry-format"><i class="fa ' . $reginald_class . '"></i> %1$s<a href="%2$s">%3$s</a></span>',
				sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'reginald' ) ),
				esc_url( get_post_format_link( $reginald_format ) ),
				get_post_format_string( $reginald_format )
			); ?>
		<?php endif;

		// categories
		if( get_theme_mod( 'entry_meta_categories', true ) && has_category() ): ?>
			<span>
				<i class="fa fa-folder-o"></i>
				<?php the_category(', '); ?>
			</span>
		<?php endif; ?>
	</span>
</div>
