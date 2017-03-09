<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type

function inhabitent_cpt_product() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'All Products',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New Product',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter Products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'inhabitent_cpt_product', 0 );


function inhabitent_cpt_adventures() {

	$labels = array(
		'name'                  => _x( 'Adventure Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventure Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventure Type', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Adventure Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Adventure:', 'text_domain' ),
		'all_items'             => __( 'All Adventure', 'text_domain' ),
		'add_new_item'          => __( 'Add New Advenutre', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'view_items'            => __( 'View Adventures', 'text_domain' ),
		'search_items'          => __( 'Search Adventure', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adventure', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this adventure', 'text_domain' ),
		'items_list'            => __( 'Adventures list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter adventures list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure Type', 'text_domain' ),
		'description'           => __( 'Adventure type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail'),
		'taxonomies'            => array( 'category', 'adventure_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventure_type', $args );

}
add_action( 'init', 'inhabitent_cpt_adventures', 0 );


