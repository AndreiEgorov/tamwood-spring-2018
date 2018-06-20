<?php
/**
 * The header for our theme.
 *
 * @package tamwood
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<div class="desktop-header">
					<div class="logo-container">
						<a href="<?php echo home_url() ?>">
							<img class="desktop logo-desktop" src="<?php echo get_template_directory_uri() ?>/assets/logos/tamwood-logo.svg">
						</a>
					</div>
					<div class="header-container">
						<a class="hamburger menu-toggle mobile" type="button"></a>
						<nav id="site-navigation" class="main-navigation toggled" role="navigation">
							<button class="mobile apply-now">Apply Now</button>	
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						<img class="mobile logo-mobile" src="<?php echo get_template_directory_uri() ?>/assets/logos/LOGO@3x.png" width="55" height="55">
						<img class="search-icon" src="<?php echo get_template_directory_uri() ?>/assets/icons/ic_search@3x.png" width="85" height="85">
						<a class="desktop apply-now" href="<?php echo get_page_link( get_page_by_title( 'Apply Now' )->ID );?>">Apply Now</a>
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
