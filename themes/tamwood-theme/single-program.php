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
		<section class='program-section program-overview container'>
			<h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
			<h4 class='blurb'><?php echo wp_kses((CFS()->get( 'blurb' )), array( 'p' => array( 'class' => '' ) ) );?></h4>
			<div class='overview-text'><?php echo wp_kses((CFS()->get( 'program_overview' )),array( 'p' => '' ) );?></div>
			
			<?php 
			$fields = CFS()->get( 'program_highlights_table' );
			$fieldCheck = $fields[0]['highlight'];

		


			if(!empty($fieldCheck)):?>

			<div class="button-box">
				<a class="read-more" id="instructor-learn-more" href="#">Read More</a>
			</div>

			<?php endif;?>

			
			<ol type="1" class='hightlights'>
			
				<?php 
				foreach ( $fields as $field ) {
					if(!empty($field['highlight_number'])):?>

					
					<li class='order-number'><?php echo esc_html($field['highlight_number']); ?></li>
					<li class='highlight'><?php echo esc_html($field['highlight']); ?></li>

					<?php endif;?>
				<?php 
				}?>
			</ol>

			<?php $fields =  CFS()->get( 'program_type_section' ) ;?>
			<ul>
				<?php 
				foreach ( $fields as $field ) {?>
					<li class='program-type'>
						<div class='box-section'>
							<h3 class='box-title'><?php echo esc_html($field['program_type']); ?></h3>
							<div class='box-set'>
								<div class='box'>
									<?php echo wp_kses( $field['box_1'], array( 'h4' => array( 'class' => '' ), 'p' => array( 'class' => '' ) ) ); ?>
								</div>
								<div class='box'>
									<?php echo wp_kses( $field['box_2'], array( 'h4' => array( 'class' => '' ), 'p' => array( 'class' => '' ) ) ); ?>
								</div>
							</div>		
						</div>
					</li>
				<?php 
				}?>
			</ul>

				<?php 
			$fields = CFS()->get( 'program_highlights_table' );
			$fieldCheck = $fields[0]['highlight'];?>

			<ol type="1" class='highlightsListHidden'>
				
				<?php 
				foreach ( $fields as $field ) {
					if(!empty($field['highlight_number'])):?>

					
					<li class='order-number'><?php echo esc_html($field['highlight_number']); ?></li>
					<li class='highlight'><?php echo esc_html($field['highlight']); ?></li>

					<?php endif;?>
				<?php 
				}?>
			</ol>

			<?php if(!empty($fieldCheck)):?>

			<div class="button-box">
				<a class="read-more" >Learn More</a>
			</div>

			<?php endif;?>


		</section>

		<section class="program-section program-nav">
			<ul class='section-navigation-mobile'>
				<?php 
				$section_option = CFS()->get( 'section_option' );
				$i = 0;

				foreach ( $section_option as $option ) {
					$i++ ?>
					<li class="section-navigation-option option-<?php echo $i ?>">
						<p><?php echo $option['option']; ?></p>
					</li> 	
				<?php 
				} ?>
			</ul>
		<div class='container button-box'>
			<a class='apply-button button1' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
		</div>
		</section>
		
		

		<section class="program-section details container">
			<div class="detail">
				<img class='icon' src="<?php echo get_template_directory_uri() ?>/assets/icons/placeholder (1)@2x.png" alt="downtown building">
				<h3>Program Length</h3>
				<?php echo wp_kses(CFS()->get( 'program_length' ), array ( 'p' => array( 'class' => '' ) ) );?>
			</div>

			<div class="detail">
				<img class='icon' src="<?php echo get_template_directory_uri() ?>/assets/icons/clock-150x150@2x.png" alt="downtown building">
				<h3>Location</h3>
				<?php echo wp_kses(CFS()->get( 'location' ), array ( 'p' => array( 'class' => '' ) ) ); ?>
			</div>

			<div class="detail schedule">
				<img class='icon' src="<?php echo get_template_directory_uri() ?>/assets/icons/calendar-150x150@2x.png" alt="downtown building">
				<h3>Schedule </h3>
				<?php $schedule = CFS()->get( 'schedule' );?>
				<ul>
					<?php 
					foreach ( $schedule as $row ) {?>
						<li>
							<div>
								<?php echo wp_kses( $row['column_1'], array('li' => array('p' => ''))); ?>
							</div>	
							<div>
								<?php echo esc_html($row['column_2']); ?>
							</div>
							<div>
								<?php echo esc_html($row['column_3']); ?>
							</div>
								
							
						</li>
					<?php 
					}?>
			</div>
			</ul>


		
		</section>

		<div class='container button-box program-section'>
			<a class='apply-button button2' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
		</div>


		<section class="program-section courses container hidden">
		
		
		<i class="fa fa-chevron-left back-button" aria-hidden="true"> Back </i>
			
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'courses_page_title' ))?></h1>
			<?php $course = CFS()->get( 'course' );?>
			<ul class='courses-table'>
				<?php 
				foreach ( $course as $row ) {?>
					<li class='course-subject'>
						<p><?php echo esc_html($row['course_subject']); ?></p>
					</li>
					<li class='number_of_weeks'>
						<p><?php echo esc_html($row['number_of_weeks']); ?></p>
					</li>
					<li class='course_hours' >
						<p><?php echo esc_html($row['course_hours']); ?></p>		
					</li>
				<?php 
				}?>
			</ul>
			<?php $courses_text_block = CFS()->get( 'text_block' );?>
			<ul class='text-chunck'>
				<?php 
				foreach ( $courses_text_block as $courses_element ) {?>
					<li>
					
							<h2 class='text-block-title'><?php echo esc_html($courses_element['text_block_title']); ?></h2>
							<p class='text'>	<?php echo wp_kses($courses_element['text'], array ( 'p' => array( 'class' => '' ) ) ); ?>	</p>
						
					</li>
				<?php 
				}?>
			</ul>
			<div class='container button-box'>
				<a class='apply-button ' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
			</div>
			
		</section>

		<section class="program-section requirements container hidden">
		<i class="fa fa-chevron-left back-button" aria-hidden="true"> Back </i>
			
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'requirements_page_title' ))?></h1>
			<?php $requirements = CFS()->get( 'requirements' );
			foreach ( $requirements as $requirement ) {?>
			<div class='one-requirement'>
				<h3 class='requirement' ><?php echo wp_kses( $requirement['requirement_type'], array('h3'))	 ;?></h3>
				<div class='requirement-description'>	<?php echo wp_kses_post( $requirement['requirement_description'])?> </div>
			</div>
			<?php } ?>
			<div class='requirements-notes'><?php echo wp_kses(CFS()->get( 'requirements_notes' ), array( 'p' => array( 'class' => '') ) )?></div>
		
			<div class='container button-box'>
				<a class='apply-button' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
			</div>
		</section>
		
		<section class='program-section start-dates container hidden'>
			
		<i class="fa fa-chevron-left back-button" aria-hidden="true"> Back </i>
			<div class='terms'>
				<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'start_dates_page_title' ))?></h1>
				<div class='term'>
					<h2><?php echo esc_html(CFS()->get_field_info( 'summer' )['label']);?></h2>
					<div class='inner-box'>
						<?php echo  wp_kses(CFS()->get( 'summer' ) , array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?>
					</div>
				</div>
				<div class='term'>
					<h2><?php echo esc_html(CFS()->get_field_info( 'fall' )['label']);?></h2>
					<div class='inner-box'>
						<?php echo  wp_kses(CFS()->get( 'fall' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?>
					</div>
				</div>
				<div class='term'>
					<h2><?php echo esc_html(CFS()->get_field_info( 'winter' )['label']);?></h2>
					<div class='inner-box'>
						<?php echo  wp_kses(CFS()->get( 'winter' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?>
					</div>
				</div>
				<div class='term'>
					<h2><?php echo esc_html(CFS()->get_field_info( 'spring' )['label']);?></h2>
					<div class='inner-box'>
						<?php echo wp_kses(CFS()->get( 'spring' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?>
					</div>
				</div>
			</div>	
			<div class='container button-box'>
				<a class='apply-button ' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
			</div>
		</section>

		<section class='program-section program-fees container hidden'>
		<i class="fa fa-chevron-left back-button" aria-hidden="true"> Back </i>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'tuition_page_title' ))?></h1>
			<?php $program_fees_box1 = CFS()->get( 'program_fees_box' );?>
			<ul class='fees-box-set'>
				<?php 
				foreach ( $program_fees_box1 as $element ) {?>	
					<li class='fees-box'>
					
							<h2> <?php echo esc_html($element['box_title']); ?></h2>
							<?php echo wp_kses($element['blurb'], array( 'p' => array( 'class' => '' ) ) ); ?>
							<ul class='fees-inner-box'>	
								<?php 		
								$inner_loop = $element['fees_box'];	

								foreach($inner_loop as $value){ 
									if(!empty($value['type_of_fee'])): ?>
										<li class='fee'> <?php echo esc_html($value['type_of_fee']); ?></li>
										<li class='amount'> <?php echo esc_html($value['fee_amount']); ?></li>
									
									<?php elseif(empty($value['type_of_fee']) && !empty($value['fee_amount'])): ?>
										<li class='amount' id='fee-empty'> <?php echo esc_html($value['fee_amount']); ?></li>
									<?php endif;?>
									
								<?php 
								} ?>
							</ul>
						
					</li>
				<?php 
				}?>
			</ul>

			<div class='container button-box'>
				<a class='apply-button ' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
			</div>
		</section>

		<section class='program-section certificates-and-hiring-partners container hidden'>
		<i class="fa fa-chevron-left back-button" aria-hidden="true"> Back </i>
		<?php 
				$props = CFS()-> get_field_info( 'certificates_and_hiring_partners' );?>
			<h2 class='certificates-and-partners'><?php echo $props['label'];?></h2>
		<div class="logo-box">
				
				<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'certificates_box_title' )) ?></h1>
				<div class='logos'>
					<?php 
					$c_logos = CFS()->get( 'certificates_logos' );

					foreach ( $c_logos as $c_logo ) {
						echo '<img src=" ' . esc_url($c_logo['logo']) . '" alt="" />';
						
					}?>
				</div>
				<p class='box-text'><?php echo wp_kses( CFS()->get('certificate_box_text'),array('p'));?></p>

			</div>
			
			<div class="logo-box">
				<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'hiring_partners_title' )) ?></h1>
				
				<div class='logos'>
				
					<?php 

					$p_logos = CFS()->get( 'partners_logos' );

					foreach ( $p_logos as $p_logo ) {
						echo '<img src=" ' . esc_url($p_logo['logo']) . '" alt="" />';
					}?>

				</div>
				<p class='box-text'><?php echo wp_kses( CFS()->get('hiring_partners_text'),array('p'));?></p>

			</div>

			<div class='container button-box'>
				<a class='apply-button ' href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
			</div>

		</section>
	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>


 $transfer_props = CFS()->get_field_info(  );
        echo esc_html($transfer_props['label']);