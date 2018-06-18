<?php 
/** Template Name: Contact Us */

get_header(); ?>
<?php get_template_part( 'template-parts/content-banner' ); ?>

<section>
    <?php
        $args = array( 'post_type' => 'campus', 'order' => 'DSC', 'posts_per_page' => 3 );
        $campuses = get_posts( $args ); // returns an array of posts
    ?>
    <div>
    <?php foreach ( $campuses as $campus ) : setup_postdata( $campus ); ?>
        <div>
            <div>
                <h2><?php echo CFS()->get( 'page_title' ); ?></h2>
                <img src='<?php echo CFS()->get( 'hero_image' ) ?>' >
            </div>
            <div>
                <h3><?php echo CFS()->get( 'contact_info' ); ?>
            </div>
        </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
</section>
<?php get_footer(); ?>