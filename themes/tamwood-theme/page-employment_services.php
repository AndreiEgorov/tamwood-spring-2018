<?php 
get_header();
get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <h3><?php echo esc_html(CFS()->get( 'section_title' )); ?></h3>
    <h4><?php echo esc_html(CFS()->get( 'section_info' )); ?></h4>
    <ul>
        <?php $loop = CFS()->get( 'list' );
        foreach ( $loop as $row ) { ?>
            <li><?php echo esc_html($row['bullet_item']);?></li> <?php
        }?>
    </ul>
    <p class='footnote'><?php echo esc_html(CFS()->get( 'footnote' )); ?></p>
    <?php echo wp_kses( CFS()->get( 'section_copy' ), array( 'p' => array( 'class' => '' ) ) );?>
</section>
<section>
    <?php $loop = CFS()->get( 'info_section' );
        foreach ( $loop as $row ) { ?>
            <div>
                <h4><?php echo esc_html($row['info_title']);?></h4>
                <img src="<?php echo esc_url($row['info_image']); ?>">
                <?php echo wp_kses( $row['info_copy'], array( 'p' => array( 'class' => '' ), ( 'li' ), ( 'ul' ) ) );?>
            </div><?php
    }?>
</section>
<?php get_footer(); ?>