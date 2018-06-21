<?php 
/** Template Name: Accreditations */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
    <h1 class="mobile">Accreditation</h1>
    <h1 class="desktop">Tamwood Careers Accreditation</h1>
    <?php $loop = CFS()->get( 'accreditations' );
            $i = 0;
    
        foreach ( $loop as $row ) {
            $i++ ?>
            <div class="accreditations-loop row-<?php echo $i ?>">
                <div class="accreditations-loop-image">
                    <img src="<?php echo $row['accreditation_image'] ?>">
                </div>
                <div class="accreditations-loop-contents">
                    <h3><?php echo $row['accreditation_name']; ?></h3>
                    <p><?php echo $row['accreditation_info']; ?></p>
                </div>
            </div>
        <?php } ?>
        <div class="apply-now-button">
            <a href="<?php echo home_url() ?>">Apply Now</a>
        </div>
    </section>
<?php get_footer(); ?>