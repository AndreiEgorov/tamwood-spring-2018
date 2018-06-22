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

			<div class ='title-wrapper'>
				<h1 class='hero-title'><?php echo esc_html(CFS()->get( 'hero_title' )); ?></h1>
			</div>

			<div class='container'>

				<h4><?php echo wp_kses( CFS()->get( 'blurb' ), array( 'p' => array( 'class' => '' ) ) ); ?><h4>
				<p class='page-copy'><?php echo wp_kses( CFS()->get( 'page_copy' ), array( 'p' => array( 'class' => '' ) ) ); ?></p>
		


				<h1>--------------------------------</h1>




				
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
								<img src="<?php echo esc_url(CFS()->get( 'hero_image' )); ?>">
							</div>

						</div>

						<?php endforeach; wp_reset_postdata(); ?>

					</div>

				</section>

				<h1>--------------------------------</h1>






				
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
								<img src="<?php echo esc_url(CFS()->get( 'hero_image' )); ?>">
							</div>

						</div>

						<?php endforeach; wp_reset_postdata(); ?>

					</div>

				</section>

				<?php get_template_part( 'template-parts/content','fpcarousel' )?>
				
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

			</div> <!--  container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
