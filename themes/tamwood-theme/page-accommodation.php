<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'options' );
        foreach ( $loop as $row ) {
            ?> <h2> <?php echo esc_html($row['option_number']); ?></h2>
            <h3> <?php echo esc_html($row['option_title']); ?> </h3>
            <?php echo wp_kses( $row['option_blurb'], array( 'p' => array( 'class' => '' ) ) ); 
        }?>
</section>
<section>
    <h2><?php    
        $transfer_props = CFS()->get_field_info( 'airport_transfer_service' );
        echo esc_html($transfer_props['label']);
    ?></h2>
    <?php echo  wp_kses( CFS()->get( 'subsection_copy' ), array( 'p' => array( 'class' => '' ) ) )?>
    <?php $loop = CFS()->get( 'airport_transfer_service' );
        foreach ( $loop as $row ) { ?>
            <h3> <?php echo esc_html( $row[ 'location' ] ); ?> </h3>
            <img src="<?php echo esc_url( $row[ 'location_icon' ] ); ?>">
            <p> <?php echo esc_html($row['transfer_option']); ?> </p>
            <h4> <?php echo esc_html($row['price']); ?> </h4> <?php
        }?>
</section>
<?php get_footer(); ?>
