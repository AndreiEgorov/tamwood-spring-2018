<?php 
/** Template Name: Student Support */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>
<?php $loop = CFS()->get( 'subsection' );
    foreach ( $loop as $row ) {
        echo $row['subsection_title'];
        echo $row['subsection_blurb'];
    }?>
<?php $loop = CFS()->get( 'image_gallery' );
    foreach ( $loop as $row ) {
        ?> 
        <img src="<?php echo $row['image']; ?>">
        <?php
    }?>
<?php get_footer(); ?>
