<?php 

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<div class="page-copy">
    <p><?php echo CFS()->get( 'page_copy' ); ?></p>
</div>
<section class="page-contents">

    <?php $loop = CFS()->get( 'info_boxes' );
        $i = 0;
        foreach ( $loop as $row ) {
            $i++ ?>
        <div class="info-loop row-<?php echo $i ?>">
            <div class="inside-box">
                <img src="<?php echo esc_url($row['info_image']); ?>">
                <h3><?php echo esc_html($row['info_title']); ?></h3>
                <p><?php echo wp_kses( $row['info_blurb'], array( 'p' => array( 'class' => '' ) ) );?></p>
            </div>
        </div>
    <?php }?>
    <div class="apply-now-button">
        <a class="apply-button" href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
    </div>
</section>
<?php get_footer(); ?>