<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>

<!-- Test Area , Andrei -->
<h1>------------------------------</h1>
<div class="instructors-carousel" data-flickity='{ "wrapAround": true, "freeScroll": false, "contain": true, "prevNextButtons": false, "pageDots":false}'>

<?php $loop = CFS()->get( 'instructors' );
    foreach ( $loop as $row ) {
        ?> 

        
        <div class="instructor-area">

            
            <div class="instructor-image" style="background:url(<?php echo $row['instructor_image']; ?>); 
            height: 268px; 
            width: 240px;
            z-index: 10;
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;"  >
            </div>

            <div class="instructor-bio">
                <h2 class="instructor-name"><?php echo $row['instructor_name']; ?></h3>
                <h3 class="instructor-position"><?php echo $row['instructor_position']; ?></h4>
               
               <?php echo $row['instructor_info']; ?>
               
               <a class="learn-more" id="instructor-learn-more" href="#">Learn More</a>

            </div>
            

        </div>
        <?php
        
    }?>


</div>

<h1>------------------------------</h1>
<!-- ------------------------ -->

<!-- ------------------------ -->







<section>
    <?php $loop = CFS()->get( 'instructors' );
        foreach ( $loop as $row ) {?>
        <div>
            <img src="<?php echo $row['instructor_image']; ?>">
            <h3><?php echo $row['instructor_name']; ?></h3>
            <h4><?php echo $row['instructor_position']; ?></h4>
            <p><?php echo $row['instructor_info']; ?></p>
        </div>
       <?php }?>
</section>
<?php get_footer(); ?>