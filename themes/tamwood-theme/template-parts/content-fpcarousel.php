<section class="carousel-box">
    <div class="carousel-box-parts">


    <h1>Testimonials</h1>   
                
    <div class="main-carousel" data-flickity='{ "wrapAround": true }'>
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
            <p class='quote'><?php echo $row['quote']; ?></p>
            <p class='testifier'><?php echo $row['testifier']; ?></p>

        </div>
       
        <?php }?>
    </div>

    </div>
</section>




	
   





