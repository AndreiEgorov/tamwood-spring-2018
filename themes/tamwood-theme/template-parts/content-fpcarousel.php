<section class="carousel-box">
    <div class="carousel-box-parts">

    <h1 class='testimonials'>Testimonials</h1>   
                
    <div class="main-carousel">
    <?php $loop = CFS()->get( 'testimonial' );

        foreach ( $loop as $row ) { ?> 

        <div class="carousel-cell">
            <div class='image-container'>
                <div class="image-container" style="background:url(<?php echo $row['testifier_image']; ?>); 
                height: 250px; 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
                </div>
            </div>
            
           <?php echo $row['quote']; ?>
            <h4 class='testifier'><?php echo $row['testifier']; ?></h4>

        </div>
       
        <?php }?>
    </div>

    </div>
</section>




	
   






