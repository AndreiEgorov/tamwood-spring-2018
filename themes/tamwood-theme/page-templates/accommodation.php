<?php 
/** Template Name: Accommodation */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>
<?php $loop = CFS()->get( 'options' );
    foreach ( $loop as $row ) {
        echo $row['option_number'];
        echo $row['option_title'];
        echo $row['option_blurb'];
    }?>
<?php    
    $transfer_props = CFS()->get_field_info( 'airport_transfer_service' );
    echo $transfer_props['label'];
?>
<?php $loop = CFS()->get( 'airport_transfer_service' );
    foreach ( $loop as $row ) {
        echo $row['location'];
        echo $row['transfer_option'];
        echo $row['price'];
    }?>
<?php get_footer(); ?>
