<?php 
/** Template Name: Our Instructors */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
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