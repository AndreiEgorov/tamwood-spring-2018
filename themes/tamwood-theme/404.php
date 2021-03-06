<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<section class="error-page-container">
						<h1><?php echo esc_html( 'Error' ); ?></h1>
						<div class="error-page-contents">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/flyaroundtheworld.png">
							<h2><?php echo esc_html( '404 not found' ); ?></h2>
							<p><?php echo esc_html( 'The page that you&rsquo;re looking for doesn&rsquo;t exist or another error has occured.' ); ?></p>
							<a href="<?php echo home_url() ?>">Close</a>
						</div> <!-- error-page-contents -->
					</section>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
