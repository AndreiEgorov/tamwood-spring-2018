<?php 
/** Template Name: Why Tamwood */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>
<?php $loop = CFS()->get( 'info_boxes' );
    foreach ( $loop as $row ) {
        echo $row['info_title'];
        echo $row['info_blurb'];
    }?>
<?php get_footer(); ?>