<?php
/**
 * Template for displaying archives
 *
 * @package Reginald
 * @since Reginald 1.0
 */
get_header(); ?>

<div class="site-content">
	<main>
		<?php get_template_part('template-parts/content_header'); ?>
		<?php get_template_part('template-parts/loop'); ?>
	</main>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
