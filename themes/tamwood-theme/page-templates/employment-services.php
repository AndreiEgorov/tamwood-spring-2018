<?php 
/** Template Name: Employment Services */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<?php echo CFS()->get( 'section_title' ); ?>
<?php echo CFS()->get( 'section_info' ); ?>
<?php $loop = CFS()->get( 'list' );
    foreach ( $loop as $row ) {
        echo $row['bullet_item'];
    }?>
<?php echo CFS()->get( 'footnote' ); ?>
<?php echo CFS()->get( 'section_copy' ); ?>
<?php $loop = CFS()->get( 'info_section' );
    foreach ( $loop as $row ) {
        echo $row['info_title'];
        ?> 
        <img src="<?php echo $row['info_image']; ?>">
        <?php
        echo $row['info_copy'];
    }?>
<?php get_footer(); ?>