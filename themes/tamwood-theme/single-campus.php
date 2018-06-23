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

        <p><?php echo wp_kses(CFS()->get( 'article_intro' ), array( 'p' => array( 'class' => '' ) ) );?></p>
        <?php echo wp_kses(CFS()->get( 'main_text' ), array( 'p' => array( 'class' => '' ) ) );?>
        
        <a class="primary-main" href="#">Apply Now</a>

        <?php 
        
        $fields = CFS()->get( 'feature_logo_and_text' );
        foreach ( $fields as $field ) {?>
           
            
            <?php
            echo '<img src="' . esc_url($field['feature_icon']) . '"/>';
            echo $field['feature_description'];
        }
        
        ?>

        <!-- This entire block will need to be deleted once the code is deployed, Andrei -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/downtown.png" alt="downtown building">
        <p>Centrally located in downtown Vancover</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/nightlife.png" alt="nightlive image">
        <p>Walking distance to shopping and nightlife</p>
        <img src="<?php echo get_template_directory_uri()?>/assets/icons/Wifi.png" alt="Wifi image">
        <p>25 student computers and free wifi</p>
        <!-- --------------------------------- -->
       
        <div>
            <?php echo CFS()->get( 'campus_location' )?>
            <p><?php echo esc_html(CFS()->get('contact_info_title'))?></p>
            <div><?php echo wp_kses(CFS()->get('contact_info'), array( 'p' => array( 'class' => '' ) ) );?></div>
        </div>
        

     
     

		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
