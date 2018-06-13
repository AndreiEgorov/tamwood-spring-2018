<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
if ( ! function_exists( 'tamwood_register_program_type' ) ) {

    // Register Custom Taxonomy
    function tamwood_register_program_type() {
    
        $labels = array(
            'name'                       => 'Program Types',
            'singular_name'              => 'Program Type',
            'menu_name'                  => 'Program Type',
            'all_items'                  => 'Program Types',
            'parent_item'                => 'Parent Program Type',
            'parent_item_colon'          => 'Parent Program Type:',
            'new_item_name'              => 'New Program Type Name',
            'add_new_item'               => 'Add New Program Type',
            'edit_item'                  => 'Edit Program Type',
            'update_item'                => 'Update Program Type',
            'view_item'                  => 'View Program Type',
            'separate_items_with_commas' => 'Separate Program Types with commas',
            'add_or_remove_items'        => 'Add or remove Program Types',
            'choose_from_most_used'      => 'Choose from the most used',
            'popular_items'              => 'Popular Program Types',
            'search_items'               => 'Search Program Types',
            'not_found'                  => 'Not Found',
            'no_terms'                   => 'No items',
            'items_list'                 => 'Program Types list',
            'items_list_navigation'      => 'Program Types list navigation',
        );
        $rewrite = array(
            'slug'                       => 'program-type',
            'with_front'                 => true,
            'hierarchical'               => true,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'program_type', array( 'program' ), $args );
    
    }
    add_action( 'init', 'tamwood_register_program_type', 0 );
    
    }