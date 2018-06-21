<?php 
/** Template Name: Accreditation */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'accreditation' );
        foreach ( $loop as $row ) {?>
        <div>
            <img src="<?php echo $row['accreditation_image'] ?>">
            <h3><?php echo $row['accreditation_name']; ?></h3>
            <p><?php echo $row['accreditation_info']; ?></p>
        </div>
    <?php } ?>
</section>
<?php get_footer(); ?>