<?php
/**
 * The template for displaying all campus posts.
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php get_template_part( 'template-parts/content','banner' )?>

        <div class='container narrow'>

            <h2 class='intro'><?php echo wp_kses( CFS()->get( 'article_intro' ), array('p'));?></h2>
           <p>  <?php echo wp_kses( CFS()->get( 'main_text' ), array('p'));?> </p> 
           
        

        <div class='button-box '>
            <a class="apply-button-green desktop-shown" href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
        </div>

        

      

       
        <section class='campus-features'>

        <?php 
        
        $fields = CFS()->get( 'feature_logo_and_text' );
        foreach ( $fields as $field ) {?>
           
            <div class='feature'>

            
            <?php
            echo '<img src="' . esc_url($field['feature_icon']) . '"/>';
            ?>
           <p class='feature-description'>
            <?php
            echo $field['feature_description'];
            ?> 
            </p>
            
            </div><?php
        }
        
        ?>
        </section>

        </div>

         <div class='button-box'>
            <a class="apply-button-green" href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
        </div>

       
        <div class="container contact-info-box">
           
                <div class='map'><?php echo  CFS()->get( 'campus_location' ) ?></div>
            <div class='contact-info'>
                <h2 class='contact-title'><?php echo esc_html(CFS()->get('contact_info_title'))?></h2>
                <div><?php echo wp_kses(CFS()->get('contact_info'), array( 'p' => array( 'class' => '' ) ) );?></div>
            </div>
        </div>
      
        

     
     

		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
