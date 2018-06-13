<?php
/**
 * The template for displaying the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1><?php echo CFS()->get( 'hero_title' ); ?></h1>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
