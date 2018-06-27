<?php
/**
 * The template for displaying program archive pages.
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="hero-image-banner">
			<img class="hero-img" src="<?php echo get_template_directory_uri() ?>/assets/hospitality.jpeg">
		</div>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1><?php echo esc_html( 'Hospitality and tourism department' ); ?></h1>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
			</header><!-- .page-header -->

			<section class="container-1">
				<h2><?php echo esc_html( 'Discover a world of possibilities by training in hospitality and tourism at Tamwood  Careers' ); ?></h2>
				<p><?php echo esc_html( 'Travel and work anywhere in the world by becoming qualified for a career in these fields.  Jobs in hospitality and tourism are growing and employers value applicants for jobs who have training and international work experience, both of which you get in our programs.' ); ?></p>
			</section>
			<h2 class="loop-header"><?php echo esc_html( 'Our programs' ); ?></h2>
			<section class="container-2">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php
						get_template_part( 'template-parts/content' );
					?>
					
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>
						
					<?php else : ?>
				
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
			<?php endif; ?>
			</section>

			<section class="carousel-box">
    		<div class="main-carousel">
    			<?php $loop = CFS()->get( 'testimonial' );
        		foreach ( $loop as $row ) { ?> 
        			<div class="carousel-cell cell">
              			<div class="title-box" >
                    		<h1 class='testimonials'>Testimonials</h1>  
                		</div>
                		<div class='image-container'>
                    		<img class="testifier-image" src="<?php echo esc_url($row['testifier_image']); ?>" alt="">  
               		 	</div>
                		<div class="desktop-text-holder" >
                    		<h3 class='quote'><?php echo wp_kses($row['quote'], array( 'h3' ) ); ?></h3>
                    		<h4 class='testifier'><?php echo esc_html($row['testifier']); ?></h4>
                		</div>
            		</div><!-- carousel-cell -->
       			<?php }?>
    		</div> <!-- main-carousel -->
			</section>
			<div class="apply-now-button">
        		<a class="apply-button" href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
    		</div>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
