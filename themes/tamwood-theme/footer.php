<?php
/**
 * The template for displaying the footer.
 *
 * @package tamwood
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
				</div><!-- .site-info -->
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/tamwoodcareers/"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/tamwoodcareers/"><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/tamwoodschools "><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.linkedin.com/company/tamwood-careers-ltd/"><i class="fa fa-linkedin"></i></a>
					</li>
				</ul>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
