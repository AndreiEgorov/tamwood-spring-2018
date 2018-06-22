<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section class="page-contents">
    <h1 class="mobile">Accreditation</h1>
    <h1 class="desktop">Tamwood Careers Accreditation</h1>
    <?php $loop = CFS()->get( 'accreditations' );
            $i = 0;
        foreach ( $loop as $row ) {
            $i++ ?>
            <div class="accreditations-loop row-<?php echo $i ?>">
                <div class="accreditations-loop-image">
                    <img src="<?php echo esc_html($row['accreditation_image']) ?>">
                </div>
                <div class="accreditations-loop-contents">
                    <h3><?php echo esc_html($row['accreditation_name']); ?></h3>
                    <?php echo wp_kses( $row['accreditation_info'], array( 'p' => array( 'class' => '' ) ) );?>
                </div>
            </div>
        <?php } ?>
        <div class="apply-now-button">
            <a href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
        </div>
    </section>
<?php get_footer(); ?>