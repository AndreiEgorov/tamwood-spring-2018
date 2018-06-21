<?php 
get_header();
get_template_part( 'template-parts/content-banner' );
echo CFS()->get( 'contact_form' ); ?>

<section>
    <?php
        $args = array( 'post_type' => 'campus', 'order' => 'DSC', 'posts_per_page' => 3 );
        $campuses = get_posts( $args ); // returns an array of posts
?>
    <div>
    <?php foreach ( $campuses as $post ) : setup_postdata( $post ); ?>
    
    <div>
            <div>
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo CFS()->get( 'hero_image' ); ?>">
            </div>
            <div>
                <p><?php echo CFS()->get( 'contact_info' ); ?></p>
            </div>
        </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
</section>
<?php get_footer(); ?>