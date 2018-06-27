<?php
/**
 * The template for displaying application page.
 *
 * @package tamwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <div class="document-checklist mobile">
                        <div class="document-checklist-inner">
                            <?php    
                            $checklist_props = CFS()->get_field_info( 'document_checklist' ); ?>
                            <h3><?php echo esc_html( $checklist_props['label'] ); ?> </h3>
                            <p><?php echo esc_html( CFS()->get( 'document_checklist' )); ?></p>
                            <ul>
                            <?php $documents = CFS()->get( 'documents' );
                                foreach ( $documents as $document ) { ?>
                                <li><i class="fa fa-check"></i><?php echo esc_html($document['document']);?></li> <?php
                                }?>
                            </ul>
                        </div>
                        <button class="close-checklist">Next</button>
                    </div>
                    <div class="document-checklist desktop">
                        <?php    
                        $checklist_props = CFS()->get_field_info( 'document_checklist' ); ?>
                        <h3 class="checklist-heading"><?php echo esc_html( $checklist_props['label'] ); ?> </h3>
                        <p><?php echo esc_html( CFS()->get( 'document_checklist' )); ?> </p>
                        <ul>
                        <?php $documents = CFS()->get( 'documents' );
                            foreach ( $documents as $document ) { ?>
                            <li><i class="fa fa-check"></i><?php echo esc_html($document['document']);?></li> <?php
                            }?>
                        </ul>
                    </div>
                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->

            <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
