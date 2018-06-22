<?php 
get_header(); 
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'info_boxes' );
        foreach ( $loop as $row ) {?>
        <div>
            <img src="<?php echo esc_url($row['info_image']); ?>">
            <h3><?php echo esc_html($row['info_title']); ?></h3>
            <p><?php echo wp_kses( $row['info_blurb'], array( 'p' => array( 'class' => '' ) ) );?></p>
        </div>
    <?php }?>
</section>
<?php get_footer(); ?>