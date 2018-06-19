<?php 
/** Template Name: Employment Services */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <h3><?php echo CFS()->get( 'section_title' ); ?></h3>
    <h4><?php echo CFS()->get( 'section_info' ); ?></h4>
    <ul>
        <?php $loop = CFS()->get( 'list' );
        foreach ( $loop as $row ) { ?>
            <li><?php echo $row['bullet_item'];?></li> <?php
        }?>
    </ul>
    <p class='footnote'><?php echo CFS()->get( 'footnote' ); ?></p>
    <p><?php echo CFS()->get( 'section_copy' ); ?></p>
</section>
<section>
    <?php $loop = CFS()->get( 'info_section' );
        foreach ( $loop as $row ) { ?>
            <div>
                <h4><?php echo $row['info_title'];?></h4>
                <img src="<?php echo $row['info_image']; ?>">
                <p><?php echo $row['info_copy']; ?></p>
            </div><?php
    }?>
</section>
<?php get_footer(); ?>