<?php
/**
 * The template for displaying all program posts.
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/content','banner' )?>






		<?php while ( have_posts() ) : the_post(); ?>


			<section class='program-overview'>
				

				<h1>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</h1>
				<?php echo CFS()->get( 'blurb' )?>
				
				<?php echo CFS()->get( 'program_overview' )?>

				<?php 
				$fields = CFS()->get( 'program_highlights_table' );
				?>
				<ol type="1">
					<?php 
						foreach ( $fields as $field ) {?>
					<li>
						<?php echo $field['highlight']; ?>	
					</li>
					<?php }?>
				</ol>

				<?php 
				$fields = CFS()->get( 'program_type_section' );
				?>
				<ul>
					<?php 
						foreach ( $fields as $field ) {?>
					<li>
						<div>
						<?php echo $field['program_type']; ?>
						<?php echo $field['box_1']; ?>
						<?php echo $field['box_2']; ?>	
						</div>
					</li>
					<?php }?>
				</ul>

				<img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
				<h3>Program Length (REPLACE IMAGE)</h3>
				<?php echo CFS()->get( 'program_length' )?>
			
				<img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
				<h3>Location (REPLACE IMAGE)</h3>
				<?php echo CFS()->get( 'location' )?>

				<img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
				<h3>Schedule (REPLACE IMAGE)</h3>

				<?php			
				$schedule = CFS()->get( 'schedule' );
				?>
				<ul>
					<?php 
						foreach ( $schedule as $row ) {?>
					<li>
						<div>
						<?php echo $row['column_1']; ?>
						<?php echo $row['column_2']; ?>
						<?php echo $row['column_3']; ?>	
						</div>
					</li>
					<?php }?>
				</ul>

				 <a class="primary-main" href="#">Apply Now</a>

			</section>

			<h1>--------------------------------------------</h1>
		<ul class='section-navigation-mobile'>

			<?php
				$section_option = CFS()->get( 'section_option' );
				foreach ( $section_option as $option ) {?>
				<li class='section-navigation-option'>
				<?php echo $option['option']; ?>
				</li>
					
			<?php } ?>

		</ul>
	

<h1>--------------------------------------------</h1>

			<section class='certificates-and-hiring-partners'>
				<?php echo CFS()->get( 'certificates_box_title' ) ?>
				<?php 
				$c_logos = CFS()->get( 'certificates_logos' );
				foreach ( $c_logos as $c_logo ) {
					echo '<img src=" ' . $c_logo['logo'] . '" alt="" />';
					
		
					

				} 

				?>

				
			</section>

			<section class="courses">
				<h1>
				<?php echo CFS()->get( 'courses_page_title' )?>
				</h1>
				<?php			
				$course = CFS()->get( 'course' );
				?>
				<ul>
					<?php 
						foreach ( $course as $row ) {?>
					<li>
						<?php echo $row['course_subject']; ?>
					</li>
					<li>
						<?php echo $row['number_of_weeks']; ?>
					</li>
					<li>
						<?php echo $row['course_hours']; ?>	
					</li>
						
				
					<?php }?>
				</ul>
				
				<?php
				$courses_text_block = CFS()->get( 'text_block' );
				?>
				<ul>
					<?php 
						foreach ( $courses_text_block as $courses_element ) {?>
					<li>
						<div>
						<?php echo $courses_element['text_block_title']; ?>
						<?php echo $courses_element['text']; ?>	
						</div>
					</li>
					<?php }?>
				</ul>
				<a class="primary-main" href="#">Apply Now</a>				

			</section>


				<section class="requirements">
				<h1>
					<?php echo CFS()->get( 'requirements_page_title' )?>
				</h1>

				<?php echo CFS()->get( 'requirements' )?>
				<a class="primary-main" href="#">Apply Now</a>	
				

			</section>

			<section class='start-dates'>
				<h1>
					<?php echo CFS()->get( 'start_dates_page_title' )?>
				</h1>

				<div>
					<h3>
						<?php echo CFS()->get_field_info( 'summer' )['label'];?>
					</h3>
						<?php echo CFS()->get( 'summer' )?>
				</div>

				<div>
					<h3>
						<?php echo CFS()->get_field_info( 'fall' )['label'];?>
					</h3>
						<?php echo CFS()->get( 'fall' )?>
				</div>

				<div>
					<h3>
						<?php echo CFS()->get_field_info( 'winter' )['label'];?>
					</h3>
						<?php echo CFS()->get( 'winter' )?>
				</div>

				<div>
					<h3>
						<?php echo CFS()->get_field_info( 'spring' )['label'];?>
					</h3>
						<?php echo CFS()->get( 'spring' )?>
				</div>

			</section>

			<section class='program-fees'>
				<h1>
					<?php echo CFS()->get( 'tuition_page_title' )?>
				</h1>

				<?php
				$program_fees_box1 = CFS()->get( 'program_fees_box' );
				?>
				<ul>
					<?php 
						foreach ( $program_fees_box1 as $element ) {?>
						
					<li>
						<div>
							<h2> 
								<?php echo $element['box_title']; ?>
							</h2>
								<?php echo $element['blurb']; ?>
					<?php 
					$inner_loop = $element['fees_box'];	

						foreach($inner_loop as $value){
							?>
							<li> <?php echo $value['type_of_fee']; ?></li>
							<li> <?php echo $value['fee_amount']; ?></li>

							 <?php 	}
							
						?>
						</div>
					</li>
					<?php }?>
				</ul>

			<a class="primary-main" href="#">Apply Now</a>

			</section>

		<?php endwhile; // End of the loop. ?>

		<div class='side-menu'>
			<div class='program-overview-option'></div>
			<div class='courses-option'></div>
			<div class='requirements-option'></div>
			<div class='start-dates-option'></div>
			<div class='tuition-option'></div>


		</div>					




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
