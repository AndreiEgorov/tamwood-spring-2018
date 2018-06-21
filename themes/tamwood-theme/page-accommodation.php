<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <?php $loop = CFS()->get( 'options' );
        foreach ( $loop as $row ) {
            ?> <h2> <?php echo $row['option_number']; ?></h2>
            <h3> <?php echo $row['option_title']; ?> </h3>
            <p><?php echo $row['option_blurb']; ?> </p> <?php
        }?>
</section>
<section>
    <h2><?php    
        $transfer_props = CFS()->get_field_info( 'airport_transfer_service' );
        echo $transfer_props['label'];
    ?></h2>
    <p><?php echo CFS()->get( 'subsection_copy' ); ?></p>
    <?php $loop = CFS()->get( 'airport_transfer_service' );
        foreach ( $loop as $row ) { ?>
            <h3> <?php echo $row['location']; ?> </h3>
            <img src="<?php echo $row['location_icon']; ?>">
            <p> <?php echo $row['transfer_option']; ?> </p>
            <h4> <?php echo $row['price']; ?> </h4> <?php
        }?>
</section>
<?php get_footer(); ?>
