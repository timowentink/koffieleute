<?php

/* REGISTER Custom Post Types and Taxonomies  */
// Register Custom Post Type
function custom_post_type() {


	//Projects
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'copilots' ),
		'singular_name'         => _x( 'Projects', 'Post Type Singular Name', 'copilots' ),
		'menu_name'             => __( 'Projects', 'copilots' ),
		'name_admin_bar'        => __( 'Project', 'copilots' ),
		'archives'              => __( 'Archive', 'copilots' ),
		'parent_item_colon'     => __( 'Parent Item:', 'copilots' ),
		'all_items'             => __( 'All Projects', 'copilots' ),
		'add_new_item'          => __( 'Add New Project', 'copilots' ),
		'add_new'               => __( 'Add New Project', 'copilots' ),
		'new_item'              => __( 'New Project', 'copilots' ),
		'edit_item'             => __( 'Edit Project', 'copilots' ),
		'update_item'           => __( 'Update Project', 'copilots' ),
		'view_item'             => __( 'View Project', 'copilots' ),
		'search_items'          => __( 'Search Projects', 'copilots' ),
		'not_found'             => __( 'Not found', 'copilots' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'copilots' ),
		'featured_image'        => __( 'Featured Image', 'copilots' ),
		'set_featured_image'    => __( 'Add Featured Image', 'copilots' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'copilots' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'copilots' ),
		'insert_into_item'      => __( 'Insert into project', 'copilots' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'copilots' ),
		'items_list'            => __( 'Projects list', 'copilots' ),
		'items_list_navigation' => __( 'Projects navigation', 'copilots' ),
		'filter_items_list'     => __( 'Filter Projects', 'copilots' )
	);
	$args = array(
		'label'                 => __( 'Projects', 'copilots' ),
		'description'           => __( 'Projects', 'copilots' ),
		'labels'                => $labels,
		'supports'              => array('author', 'title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite' => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );


	//Products
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'copilots' ),
		'singular_name'         => _x( 'Products', 'Post Type Singular Name', 'copilots' ),
		'menu_name'             => __( 'Products', 'copilots' ),
		'name_admin_bar'        => __( 'Product', 'copilots' ),
		'archives'              => __( 'Archive', 'copilots' ),
		'parent_item_colon'     => __( 'Parent Item:', 'copilots' ),
		'all_items'             => __( 'All Products', 'copilots' ),
		'add_new_item'          => __( 'Add new product', 'copilots' ),
		'add_new'               => __( 'Add new product', 'copilots' ),
		'new_item'              => __( 'New product', 'copilots' ),
		'edit_item'             => __( 'Edit product', 'copilots' ),
		'update_item'           => __( 'Update product', 'copilots' ),
		'view_item'             => __( 'View product', 'copilots' ),
		'search_items'          => __( 'Search Products', 'copilots' ),
		'not_found'             => __( 'Not found', 'copilots' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'copilots' ),
		'featured_image'        => __( 'Featured Image', 'copilots' ),
		'set_featured_image'    => __( 'Add Featured Image', 'copilots' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'copilots' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'copilots' ),
		'insert_into_item'      => __( 'Insert into product', 'copilots' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'copilots' ),
		'items_list'            => __( 'Products list', 'copilots' ),
		'items_list_navigation' => __( 'Products navigation', 'copilots' ),
		'filter_items_list'     => __( 'Filter Products', 'copilots' )
	);
	$args = array(
		'label'                 => __( 'Products', 'copilots' ),
		'description'           => __( 'Products', 'copilots' ),
		'labels'                => $labels,
		'supports'              => array('author', 'title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite' => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );



}

add_action( 'init', 'custom_post_type', 0 );


?>
