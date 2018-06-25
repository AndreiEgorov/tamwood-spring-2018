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
            <div class='button-box'>
            <a class="apply-button-green" href="#">Apply Now</a>
            </div>
        
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
       
       
        <div>
            <?php echo esc_html( CFS()->get( 'campus_location' ), array('p'));?>
            <p><?php echo esc_html(CFS()->get('contact_info_title'))?></p>
            <div><?php echo esc_html(CFS()->get('contact_info'))?></div>
        </div>
        

     
     

		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
