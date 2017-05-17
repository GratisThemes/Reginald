<?php
/**
 * Template for displaying pages
 *
 * @package Reginald
 * @since Reginald 1.0
 */
get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
	<div class="site-content">
		<main>
			<?php get_template_part('template-parts/content_header'); ?>
			<?php get_template_part('template-parts/content'); ?>

			<?php if( comments_open() || get_comments_number() ){
				comments_template();
			} ?>
		</main>

		<?php get_sidebar(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
