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
		<p><?php echo CFS()->get( 'blurb' ); ?></p>

	<!-- Test Area, Andrei -->
	
	<?php get_template_part( 'template-parts/content','fpcarousel' )?>
	

	<!-- _____________ -->

		<section class="testimonials home-carousel">
				<h1>Testimonials</h1>
				<?php $loop = CFS()->get( 'testimonial' );
				foreach ( $loop as $row ) {
					?> 
					<img src="<?php echo $row['testifier_image']; ?>">
					<p><?php echo $row['quote']; ?></p>
					<p><?php echo $row['testifier']; ?></p>
					<?php }?>
			</section>
			<section>
			<h1>Departments</h1>
    		<?php
				$args = array( 'post_type' => 'program', 'order' => 'DSC', 'posts_per_page' => 3 );
				$program = get_posts( $args ); // returns an array of posts
			?>
				<div>
				<?php foreach ( $program as $post ) : setup_postdata( $post ); ?>
				
				<div>
						<div>
							<h2><?php the_title(); ?></h2>
							<img src="<?php echo CFS()->get( 'hero_image' ); ?>">
						</div>
					</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
			</section>
			<section class="accreditations">
				<h1>Accreditaions</h1>
				<ul class="accreditations-logos">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/BC_PrivateTrainingDesignated_RGB_Color Internet.png">
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/bc1@3x.png">
					</li>
				</ul>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
