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
<?php get_footer(); ?>
