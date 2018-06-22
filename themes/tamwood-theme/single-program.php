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
	<!-- wp_kses( $row['option_blurb'], array( 'p' => array( 'class' => '' ) ) ); -->
		<section class='program-section program-overview container'>
			<h1><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
			<h4 class='blurb'><?php echo wp_kses((CFS()->get( 'blurb' )), array( 'p' => array( 'class' => '' ) ) );?></h4>
			<p class='overview-text'><?php echo wp_kses((CFS()->get( 'program_overview' )),array( 'p' => array( 'class' => '' ) ) );?></p>
			<?php $fields = CFS()->get( 'program_highlights_table' );?>
			<ol type="1">
				<?php 
				foreach ( $fields as $field ) {?>
					<li><?php echo esc_html($field['highlight']); ?></li>
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
		</section>

		<section class="program-section program-nav">
		<!-- Nav -------------------------- -->
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
		<!-- End Nav -------------------------- -->
		</section>

		<section class="program-section details container">
			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/placeholder (1)@2x.png" alt="downtown building">
			<h3>Program Length (REPLACE IMAGE)</h3>
			<?php echo wp_kses(CFS()->get( 'program_length' ), array ( 'p' => array( 'class' => '' ) ) );?>
		
			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/clock-150x150@2x.png" alt="downtown building">
			<h3>Location (REPLACE IMAGE)</h3>
			<?php echo wp_kses(CFS()->get( 'location' ), array ( 'p' => array( 'class' => '' ) ) ); ?>

			<img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
			<h3>Schedule (REPLACE IMAGE)</h3>

			<?php $schedule = CFS()->get( 'schedule' );?>
			<ul>
				<?php 
				foreach ( $schedule as $row ) {?>
					<li>
						<div>
							<?php echo esc_html($row['column_1']); ?>
							<?php echo esc_html($row['column_2']); ?>
							<?php echo esc_html($row['column_3']); ?>	
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>

		<section class="program-section courses container hidden">
			<button class="back-button">Back</button>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'courses_page_title' ))?></h1>
			<?php $course = CFS()->get( 'course' );?>
			<ul>
				<?php 
				foreach ( $course as $row ) {?>
					<li>
						<?php echo esc_html($row['course_subject']); ?>
					</li>
					<li>
						<?php echo esc_html($row['number_of_weeks']); ?>
					</li>
					<li>
						<?php echo esc_html($row['course_hours']); ?>	
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
							<?php echo esc_html($courses_element['text_block_title']); ?>
							<?php echo wp_kses($courses_element['text'], array ( 'p' => array( 'class' => '' ) ) ); ?>	
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>

		<section class="program-section requirements container hidden">
			<button class="back-button">Back</button>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'requirements_page_title' ))?></h1>
			<?php echo wp_kses(CFS()->get( 'requirements' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ) )?>
		</section>
		
		<section class='program-section start-dates container hidden'>
			<button class="back-button">Back</button>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'start_dates_page_title' ))?></h1>
			<div>
				<h3><?php echo esc_html(CFS()->get_field_info( 'summer' )['label']);?></h3>
				<p><?php echo  wp_kses(CFS()->get( 'summer' ) , array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?></p>
			</div>
			<div>
				<h3><?php echo esc_html(CFS()->get_field_info( 'fall' )['label']);?></h3>
				<p><?php echo  wp_kses(CFS()->get( 'fall' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?></p>
			</div>
			<div>
				<h3><?php echo esc_html(CFS()->get_field_info( 'winter' )['label']);?></h3>
				<p><?php echo  wp_kses(CFS()->get( 'winter' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?></p>
			</div>
			<div>
				<h3><?php echo esc_html(CFS()->get_field_info( 'spring' )['label']);?></h3>
				<p><?php echo wp_kses(CFS()->get( 'spring' ), array( 'p' => array( 'class' => ''), 'ol' => array( 'class' => ''), 'li' => array( 'class' => '') ))?></p>
			</div>
		</section>

		<section class='program-section program-fees container hidden'>
			<button class="back-button">Back</button>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'tuition_page_title' ))?></h1>
			<?php $program_fees_box1 = CFS()->get( 'program_fees_box' );?>
			<ul>
				<?php 
				foreach ( $program_fees_box1 as $element ) {?>	
					<li>
						<div>
							<h2> <?php echo esc_html($element['box_title']); ?></h2>
							<?php echo wp_kses($element['blurb'], array( 'p' => array( 'class' => '' ) ) ); ?>
							<ul>	
								<?php 		
								$inner_loop = $element['fees_box'];	

								foreach($inner_loop as $value){ ?>
									<li> <?php echo esc_html($value['type_of_fee']); ?></li>
									<li> <?php echo esc_html($value['fee_amount']); ?></li>
								<?php 
								} ?>
							</ul>
						</div>
					</li>
				<?php 
				}?>
			</ul>
		</section>

		<section class='program-section certificates-and-hiring-partners container hidden'>
			<button class="back-button">Back</button>
			<h1 class="program-heading"><?php echo esc_html(CFS()->get( 'certificates_box_title' )) ?></h1>
			<?php 
			$c_logos = CFS()->get( 'certificates_logos' );

			foreach ( $c_logos as $c_logo ) {
				echo '<img src=" ' . esc_url($c_logo['logo']) . '" alt="" />';
			}?>
		</section>
	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
