<?php
/**
 * The template for displaying search results pages.
 *
 * @package tamwood
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php tamwood_numbered_pagination(); ?>

		<?php else : ?>
			<div class="search-noresults-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/flyaroundtheworld.png">
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</div>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
