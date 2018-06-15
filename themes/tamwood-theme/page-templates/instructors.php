<?php 
/** Template Name: Our Instructors */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>
<?php $loop = CFS()->get( 'instructors' );
    foreach ( $loop as $row ) {
        ?>
        <img src="<?php echo $row['instructor_image']; ?>">
        <?php
        echo $row['instructor_name'];
        echo $row['instructor_position'];
        echo $row['instructor_info'];
    }?>
<?php get_footer(); ?>