<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
if ( ! function_exists('tamwood_register_campus') ) {

    // Register Custom Post Type
    function tamwood_register_campus() {
    
        $labels = array(
            'name'                  => 'Campuses',
            'singular_name'         => 'Campus',
            'menu_name'             => 'Campuses',
            'name_admin_bar'        => 'Campus',
            'archives'              => 'Campus Archives',
            'attributes'            => 'Campus Attributes',
            'parent_item_colon'     => 'Parent Campus:',
            'all_items'             => 'All Campuses',
            'add_new_item'          => 'Add New Campus',
            'add_new'               => 'Add New',
            'new_item'              => 'New Campus',
            'edit_item'             => 'Edit Campus',
            'update_item'           => 'Update Campus',
            'view_item'             => 'View Campus',
            'view_items'            => 'View Campuses',
            'search_items'          => 'Search Campus',
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into Campus',
            'uploaded_to_this_item' => 'Uploaded to this Campus',
            'items_list'            => 'Campuses list',
            'items_list_navigation' => 'Campuses list navigation',
            'filter_items_list'     => 'Filter campuses list',
        );
        $rewrite = array(
            'slug'                  => 'campus',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => 'Campus',
            'description'           => 'Campus of Tamwood',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
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
            'has_archive'           => 'campuses',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'query_var'             => 'campus_post_type',
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
        );
        register_post_type( 'campus', $args );
    
    }
    add_action( 'init', 'tamwood_register_campus', 0 );
    
    }