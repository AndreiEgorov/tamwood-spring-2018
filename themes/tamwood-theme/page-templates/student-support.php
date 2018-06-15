<?php 
/** Template Name: Student Support */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
<?php $loop = CFS()->get( 'subsection' );
    foreach ( $loop as $row ) { ?>
        <div>
            <h3> <?php echo $row['subsection_title']; ?> </h3>
            <p> <?php echo $row['subsection_blurb']; ?> </p> 
        </div> <?php
    }?>
</section>
<section>
<?php $loop = CFS()->get( 'image_gallery' );
    foreach ( $loop as $row ) {
        ?> 
        <img src="<?php echo $row['image']; ?>">
        <?php
    }?>
</section>
<?php get_footer(); ?>
