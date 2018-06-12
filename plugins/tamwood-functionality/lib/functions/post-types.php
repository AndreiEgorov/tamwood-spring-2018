<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function tamwood_register_campus() {

	$labels = array(
		'name'                  => _x( 'Campuses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Campus', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Campuses', 'text_domain' ),
		'name_admin_bar'        => __( 'Campus', 'text_domain' ),
		'archives'              => __( 'Campus Archives', 'text_domain' ),
		'attributes'            => __( 'Campus Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Campus:', 'text_domain' ),
		'all_items'             => __( 'All Campuses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Campus', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Campus', 'text_domain' ),
		'edit_item'             => __( 'Edit Campus', 'text_domain' ),
		'update_item'           => __( 'Update Campus', 'text_domain' ),
		'view_item'             => __( 'View Campus', 'text_domain' ),
		'view_items'            => __( 'View Campuses', 'text_domain' ),
		'search_items'          => __( 'Search Campus', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Campus', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Campus', 'text_domain' ),
		'items_list'            => __( 'Campuses list', 'text_domain' ),
		'items_list_navigation' => __( 'Campuses list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Campuses list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'campus',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Campus', 'text_domain' ),
		'description'           => __( 'Tamwood Campuses', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'campus',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'campus_post_type',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'tamwood_register_campus', 0 );