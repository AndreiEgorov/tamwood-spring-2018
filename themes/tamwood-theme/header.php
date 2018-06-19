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
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
				<div class="header-container container">
					<button class="hamburger menu-toggle" type="button"></button>
					<img class="desktop" src="<?php echo get_template_directory_uri() ?>/assets/logos/tamwood-logo.svg">
					<nav id="site-navigation" class="main-navigation toggled" role="navigation">
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<img class="mobile" src="<?php echo get_template_directory_uri() ?>/assets/logos/LOGO@3x.png" width="55" height="55">
					<img class="search-icon" src="<?php echo get_template_directory_uri() ?>/assets/icons/ic_search@3x.png" width="85" height="85">
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
