<section class="carousel-box">
    <div class="carousel-box-parts">

    <h1 class='testimonials'>Testimonials</h1>   
                
    <div class="main-carousel">
    <?php $loop = CFS()->get( 'testimonial' );

        foreach ( $loop as $row ) { ?> 

        <div class="carousel-cell">
            <div class='image-container'>
                <div class="image-container" style="background:url(<?php echo esc_url($row['testifier_image']); ?>); 
                height: 250px; 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
                </div>
            </div>
            
            <p class='quote'><?php echo wp_kses($row['quote'], array( 'h3' => array( 'class' => '' ) ) ); ?></p>
            <p class='testifier'><?php echo esc_html($row['testifier']); ?></p>

        </div>
       
        <?php }?>
    </div>

    </div>
</section>




	
   






