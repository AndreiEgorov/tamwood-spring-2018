
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
    </div>
</section>

------------------------------






	
   






