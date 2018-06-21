<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'accreditations' );
        foreach ( $loop as $row ) {?>
        <div>
            <img src="<?php echo $row['accreditation_image'] ?>">
            <h3><?php echo $row['accreditation_name']; ?></h3>
            <p><?php echo $row['accreditation_info']; ?></p>
        </div>
    <?php } ?>
</section>
<?php get_footer(); ?>