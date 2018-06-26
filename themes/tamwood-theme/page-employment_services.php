<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section class="section n-1">
    <h3 class="section-title"><?php echo esc_html(CFS()->get( 'section_title' )); ?></h3>
    <h4><?php echo esc_html(CFS()->get( 'section_info' )); ?></h4>
    <ul class="info-list">
        <?php $loop = CFS()->get( 'list' );
        foreach ( $loop as $row ) { ?>
            <li><i class="fa fa-check"></i><?php echo esc_html($row['bullet_item']);?></li> <?php
        }?>
    </ul>
    <p class="footnote"><?php echo esc_html(CFS()->get( 'footnote' )); ?></p>
    <?php echo wp_kses( CFS()->get( 'section_copy' ), array( 'p' => array( 'class' => '' ) ) );?>
</section>
<section class="section n-2">
    <?php $loop = CFS()->get( 'info_section' );
        foreach ( $loop as $row ) { ?>
            <div class="info-section-item">
                <h4><?php echo esc_html($row['info_title']);?></h4>
                <div class="info-img">
                    <img src="<?php echo esc_url($row['info_image']); ?>">
                </div>
                <p><?php echo wp_kses( $row['info_copy'], array( 'p' => array( 'class' => '' ) ) );?></p>      
            </div> <!--info-section-item-->
        <?php }?>
</section>
<div class="apply-now-button">
    <a class='apply-button' href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
</div>
<?php get_footer(); ?>