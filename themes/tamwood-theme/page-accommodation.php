<?php 
/** Template Name: Accommodation */
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<div class="page-copy">
    <p><?php echo CFS()->get( 'page_copy' ); ?></p>
</div>
<section class="page-contents part-1">
    <?php $loop = CFS()->get( 'options' );
        foreach ( $loop as $row ) { ?>
            <div class="option-item">
                <h2> <?php echo esc_html($row['option_number']); ?></h2>
                <h3> <?php echo esc_html($row['option_title']); ?> </h3>
                <?php echo wp_kses( $row['option_blurb'], array( 'p' => array( 'class' => '' ) ) ); ?>
            </div> 
        <?php } ?>
</section>
<section class="page-contents part-2">
    <h2><?php    
        $transfer_props = CFS()->get_field_info( 'airport_transfer_service' );
        echo esc_html($transfer_props['label']);
    ?></h2>
    <?php echo  wp_kses( CFS()->get( 'subsection_copy' ), array( 'p' => array( 'class' => '' ) ) )?>
    <div class="subsection-banner">
        <?php $loop = CFS()->get( 'airport_transfer_service' );
            foreach ( $loop as $row ) { ?>
            <div class="subsection-item">
                <h3> <?php echo esc_html( $row[ 'location' ] ); ?> </h3>
                <img src="<?php echo esc_url( $row[ 'location_icon' ] ); ?>">
                <div class="location-group">
                    <p class="price-text"> <?php echo esc_html($row['transfer_option']); ?> </p>
                    <h4> <?php echo esc_html($row['price']); ?> </h4> 
                </div>
            </div>
        <?php   }?>
    </div> <!-- subsection-banner -->
        <div class="apply-now-button">
            <a class="apply-button" href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
        </div>
</section>
<?php get_footer(); ?>
