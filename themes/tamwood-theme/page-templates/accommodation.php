<?php 
/** Template Name: Accommodation */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'options' );
        foreach ( $loop as $row ) {
            ?> <h2> <?php echo $row['option_number']; ?></h2>
            <h4> <?php echo $row['option_title']; ?> </h4>
            <p><?php echo $row['option_blurb']; ?> </p> <?php
        }?>
</section>
<section>
    <h3><?php    
        $transfer_props = CFS()->get_field_info( 'airport_transfer_service' );
        echo $transfer_props['label'];
    ?></h3>
    <p><?php echo CFS()->get( 'subsection_copy' ); ?></p>
    <?php $loop = CFS()->get( 'airport_transfer_service' );
        foreach ( $loop as $row ) { ?>
            <h4> <?php echo $row['location']; ?> </h4>
            <img src="<?php echo $row['location_icon']; ?>">
            <p> <?php echo $row['transfer_option']; ?> </p>
            <h5> <?php echo $row['price']; ?> </h5> <?php
        }?>
</section>
<?php get_footer(); ?>
