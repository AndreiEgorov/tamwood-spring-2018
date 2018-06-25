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

			<div class ="title-wrapper">
				<h1 class="hero-title"><?php echo esc_html(CFS()->get( 'hero_title' )); ?></h1>
			</div>

			<div class='container'>

				<h2 class='blurb'><?php echo esc_html(CFS()->get( 'blurb' )); ?> </h2>
				<p class='page-copy'><?php echo wp_kses(  CFS()->get( 'page_copy' ) , array('p')); ?></p>

				<h1 class='departments-section-title'>Departments</h1>
				<section class='departments-section'>

					
					<div class="department">
						<img class="department-image" src="<?php echo wp_get_attachment_url( 280 ); ?>" alt="Global startup school image">
						<?php 
						$department_taxonomy = get_terms('program_type', array(
							'slug' => 'global_sturtup_school',
							'hide_empty' => 0,
						));
						$school_array = get_object_vars($department_taxonomy[0]);			
						?>
						<h3 class="department-program"><?php echo $school_array['name'];?></h3> 
						<a class='learn-button' href="<?php echo $school_array['description'];?>">Learn More</a>  <!-- link to external site -->
					</div>
					<div class="department">
						<img class="department-image" src="<?php echo wp_get_attachment_url( 278 ); ?>" alt="International business management image">
						<h3 class="department-program business">  <?php echo  get_object_vars($term = get_terms('program_type', array('slug' => 'international_business_management_coop','hide_empty' => 0,))[0])['name']; ?> </h3>
						<a class='learn-button' href="<?php echo get_term_link( $term ); ?>"> Learn More</a>
					</div>
					<div class="department">
						<img class="department-image" src="<?php echo wp_get_attachment_url( 279 ); ?>" alt=" Hospitality and Tourism image">
						<h3 class="department-program"><?php echo get_object_vars($term1 = get_terms('program_type', array('slug'=>'hospitality-and-tourism', 'hide_empty'=> 0))[0])['name'];?></h3>
						<a class='learn-button' href="<?php echo get_term_link($term1); ?>"> Learn More</a>	
					</div>
					
				</section>
				
			</div>
			

				<?php get_template_part( 'template-parts/content','fpcarousel' )?>
				
			<div class='container'>				
				<section class="accreditations-section">

					<h1>Accreditaions</h1>
					<ul class="accreditations-logos">
						<li>
							<img class="designated" src="<?php echo get_template_directory_uri(); ?>/assets/logos/BC_PrivateTrainingDesignated_RGB_Color Internet.png">
						</li>
						<li>
							<img class="bccareer" src="<?php echo get_template_directory_uri(); ?>/assets/logos/bc1@3x.png">
						</li>
					</ul>
				</section>
				<div class='button-box'>
				<a class='apply-button' href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>

				</div>

			</div> <!--  container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
