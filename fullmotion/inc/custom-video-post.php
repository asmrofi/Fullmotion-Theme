<?php
// Register Custom Post Type Video Post
function create_videopost_cpt() {

	$labels = array(
		'name' => _x( 'Video Post', 'Post Type General Name', 'fullmotion' ),
		'singular_name' => _x( 'Video Post', 'Post Type Singular Name', 'fullmotion' ),
		'menu_name' => _x( 'Video Post', 'Admin Menu text', 'fullmotion' ),
		'name_admin_bar' => _x( 'Video Post', 'Add New on Toolbar', 'fullmotion' ),
		'archives' => __( 'Video Post Archives', 'fullmotion' ),
		'attributes' => __( 'Video Post Attributes', 'fullmotion' ),
		'parent_item_colon' => __( 'Parent Video Post:', 'fullmotion' ),
		'all_items' => __( 'All Video Post', 'fullmotion' ),
		'add_new_item' => __( 'Add New Video Post', 'fullmotion' ),
		'add_new' => __( 'Add New', 'fullmotion' ),
		'new_item' => __( 'New Video Post', 'fullmotion' ),
		'edit_item' => __( 'Edit Video Post', 'fullmotion' ),
		'update_item' => __( 'Update Video Post', 'fullmotion' ),
		'view_item' => __( 'View Video Post', 'fullmotion' ),
		'view_items' => __( 'View Video Post', 'fullmotion' ),
		'search_items' => __( 'Search Video Post', 'fullmotion' ),
		'not_found' => __( 'Not found', 'fullmotion' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'fullmotion' ),
		'featured_image' => __( 'Video Image', 'fullmotion' ),
		'set_featured_image' => __( 'Set video image', 'fullmotion' ),
		'remove_featured_image' => __( 'Remove video image', 'fullmotion' ),
		'use_featured_image' => __( 'Use as featured image', 'fullmotion' ),
		'insert_into_item' => __( 'Insert into Video Post', 'fullmotion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Video Post', 'fullmotion' ),
		'items_list' => __( 'Video Post list', 'fullmotion' ),
		'items_list_navigation' => __( 'Video Post list navigation', 'fullmotion' ),
		'filter_items_list' => __( 'Filter Video Post list', 'fullmotion' ),
	);
	$args = array(
		'label' => __( 'Video Post', 'fullmotion' ),
		'description' => __( '', 'fullmotion' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-video',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'videopost', $args );

}
add_action( 'init', 'create_videopost_cpt', 0 );
