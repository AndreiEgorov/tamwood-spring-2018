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
		<section class='program-overview container'>
			<h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
			<h4 class='blurb'><?php echo CFS()->get( 'blurb' )?></h4>
			<p class='overview-text'><?php echo CFS()->get( 'program_overview' )?></p>
			<?php $fields = CFS()->get( 'program_highlights_table' );?>
			<ol type="1">
				<?php 
				foreach ( $fields as $field ) {?>
					<li><?php echo $field['highlight']; ?></li>
				<?php 
				}?>
			</ol>
			<?php $fields =  CFS()->get( 'program_type_section' ) ;?>
			<ul>
				<?php 
				foreach ( $fields as $field ) {?>
					<li class='program-type'>
						<div class='box-section'>
							<h3 class='box-title'><?php echo $field['program_type']; ?></h3>
							<div class='box-set'>
								<div class='box'>
									<?php echo $field['box_1']; ?>
								</div>
								<div class='box'>
									<?php echo $field['box_2']; ?>
								</div>
							</div>		
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>
		<section class="program-nav">
		<!-- <h1>--------------------------</h1> -->
			<ul class='section-navigation-mobile'>
				<?php $section_option = CFS()->get( 'section_option' );

				foreach ( $section_option as $option ) {?>
					<li class='section-navigation-option'>
						<p><?php echo $option['option']; ?></p>
					</li> 	
				<?php 
				} ?>
			</ul>
		<!-- <h1>--------------------------</h1> -->
		</section>
		<section class="details container">
			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/placeholder (1)@2x.png" alt="downtown building">
			<h3>Program Length (REPLACE IMAGE)</h3>
			<?php echo CFS()->get( 'program_length' )?>
		
			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/clock-150x150@2x.png" alt="downtown building">
			<h3>Location (REPLACE IMAGE)</h3>
			<?php echo CFS()->get( 'location' )?>

			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
			<h3>Schedule (REPLACE IMAGE)</h3>

			<?php $schedule = CFS()->get( 'schedule' );?>
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
				<?php 
				}?>
			</ul>
		</section>

		<section class='certificates-and-hiring-partners container'>
			<?php echo CFS()->get( 'certificates_box_title' ) ?>
			<?php 
			$c_logos = CFS()->get( 'certificates_logos' );

			foreach ( $c_logos as $c_logo ) {
				echo '<img src=" ' . $c_logo['logo'] . '" alt="" />';
			}?>
		</section>
		<section class="courses container">
			<h1><?php echo CFS()->get( 'courses_page_title' )?></h1>
			<?php $course = CFS()->get( 'course' );?>
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
				<?php 
				}?>
			</ul>
			<?php $courses_text_block = CFS()->get( 'text_block' );?>
			<ul>
				<?php 
				foreach ( $courses_text_block as $courses_element ) {?>
					<li>
						<div>
							<?php echo $courses_element['text_block_title']; ?>
							<?php echo $courses_element['text']; ?>	
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>

		<section class="requirements container">
			<h1><?php echo CFS()->get( 'requirements_page_title' )?></h1>
			<p><?php echo CFS()->get( 'requirements' )?></p>
		</section>
		
		<section class='start-dates container'>
			<h1><?php echo CFS()->get( 'start_dates_page_title' )?></h1>
			<div>
				<h3><?php echo CFS()->get_field_info( 'summer' )['label'];?></h3>
				<p><?php echo CFS()->get( 'summer' )?></p>
			</div>
			<div>
				<h3><?php echo CFS()->get_field_info( 'fall' )['label'];?></h3>
				<p><?php echo CFS()->get( 'fall' )?></p>
			</div>
			<div>
				<h3><?php echo CFS()->get_field_info( 'winter' )['label'];?></h3>
				<p><?php echo CFS()->get( 'winter' )?></p>
			</div>
			<div>
				<h3><?php echo CFS()->get_field_info( 'spring' )['label'];?></h3>
				<p><?php echo CFS()->get( 'spring' )?></p>
			</div>
		</section>

		<section class='program-fees container'>
			<h1><?php echo CFS()->get( 'tuition_page_title' )?></h1>
			<?php $program_fees_box1 = CFS()->get( 'program_fees_box' );?>
			<ul>
				<?php 
				foreach ( $program_fees_box1 as $element ) {?>	
					<li>
						<div>
							<h2> <?php echo $element['box_title']; ?></h2>
							<p><?php echo $element['blurb']; ?></p>
							<ul>	
								<?php 		
								$inner_loop = $element['fees_box'];	

								foreach($inner_loop as $value){ ?>
									<li> <?php echo $value['type_of_fee']; ?></li>
									<li> <?php echo $value['fee_amount']; ?></li>
								<?php 
								} ?>
							</ul>
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>
	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
