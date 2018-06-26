<?php
/** Template Name: Thanks For Applying */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<h1><?php echo esc_html( 'Application Form' ); ?></h1>
			<section class="thanks-for-applying">
					<div class="thanks-page-contents">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/flyaroundtheworld.png">
						<h2><?php echo esc_html( 'Thank you for applying at Tamwood careers.' ); ?></h2>
						<p><?php echo esc_html( 'We are pleased to advice that your application has been submitted. We will contact you by email whether your application has been successful or not as soon as possible.' ); ?></p>
						<p><?php echo esc_html( 'We hope to see you soon.' ); ?></p>
						<div class="close-button">
            				<a class="closing-button" href="<?php echo home_url() ?>">Close</a>
        				</div>
					</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
