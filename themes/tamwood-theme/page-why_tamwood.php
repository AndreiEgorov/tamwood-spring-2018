<?php 
get_header(); 
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'info_boxes' );
        foreach ( $loop as $row ) {?>
        <div>
            <img src="<?php echo $row['info_image']; ?>">
            <h3><?php echo $row['info_title']; ?></h3>
            <p><?php echo $row['info_blurb']; ?></p>
        </div>
    <?php }?>
</section>
<?php get_footer(); ?>