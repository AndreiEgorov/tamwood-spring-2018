<?php 
/** Template Name: Contact Us */
get_header(); ?>

<section>
    <div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
        <?php
        $args = array( 'post_type' => 'campus', 'order' => 'DSC', 'posts_per_page' => 3 );
        $campuses = get_posts( $args ); // returns an array of posts
        ?>
            <div class="desktop">
            <?php foreach ( $campuses as $post ) : setup_postdata( $post ); ?>
            
                <div>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php echo esc_url(CFS()->get( 'hero_image' )); ?>">
                    </div>
                    <div>
                        <p><?php echo wp_kses(CFS()->get( 'contact_info' ), array( 'p' => array( 'class' => '' ) ) ); ?></p>
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</section>
<?php get_footer(); ?>