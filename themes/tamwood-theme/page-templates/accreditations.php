<?php 
/** Template Name: Accreditations */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>
<?php $loop = CFS()->get( 'accreditations_loop' );
    foreach ( $loop as $row ) {
        echo $row['accreditation_name'];
        echo $row['accreditation_info'];
    }?>
<?php get_footer(); ?>