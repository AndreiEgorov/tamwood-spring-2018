<?php
/**
 * The template for displaying the front page.
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/content','banner' )?>
			<h1><?php echo CFS()->get( 'hero_title' ); ?></h1>
			<h1><?php echo CFS()->get( 'page_title' ); ?></h2>
			<h2><?php echo CFS()->get( 'blurb' ); ?></h3>
			<p><?php echo CFS()->get( 'page_copy' ); ?></p>

			<section class="testimonials home-carousel">
				<?php $loop = CFS()->get( 'testimonial' );
				foreach ( $loop as $row ) {
					?> 
					<img src="<?php echo $row['testifier_image']; ?>">
					
					<p><?php echo $row['quote']; ?></p>
					<p><?php echo $row['testifier']; ?></p>
					<?php }?>
			</section>
			<section class="accreditations">

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
