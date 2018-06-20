<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package tamwood
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function tamwood_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'tamwood_body_classes' );


function tamwood_dynamic_css(){
	//1 make sure it's the About page that's loaded
	//if we are not on the about page, get out
	// if(!is_page_template('page-templates/about.php')){
	// 	return;
	// }
	//2 get background image form custom field
	$image = CFS()->get('hero_image');
	//3 if there is no image in the field, get out of there
	if(!$image){
		return;
	}
	//4 add our custom css
	$hero_css = ".hero-image{
		background: 
		url({$image}) no-repeat center;
		background-size: cover;
		height: 190px;
		min-width: 100%;

	}";

	

	wp_add_inline_style('tamwood-style', $hero_css);
}

add_action( 'wp_enqueue_scripts', 'tamwood_dynamic_css' );

function tamwood_mobile_option_background(){

	$image = CFS()->get('option_background');
	//3 if there is no image in the field, get out of there
	if(!$image){
		return;
	}
	//4 add our custom css
	$section_navigation_option = ".section-navigation-option{
		background: 
		url({$image}) no-repeat right bottom;
		background-size: cover;
		height: 50px;
	}";

	

	wp_add_inline_style('tamwood-style', $section_navigation_option);
}

add_action( 'wp_enqueue_scripts', 'tamwood_mobile_option_background' );

