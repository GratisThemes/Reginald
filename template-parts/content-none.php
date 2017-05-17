<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package Reginald
 * @since Reginald 1.0
 */
?>
<h1 class="page-title"><?php _e( 'Nothing Found', 'reginald' ); ?></h1>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'reginald' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'reginald' ); ?></p>

<?php else : ?>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'reginald' ); ?></p>
	
	<?php get_search_form(); ?>

<?php endif; ?>
