<?php
function MW_portfolio_post_type() {
    $labels = array(
		'name'                  => _x( 'Portfolios', 'Post type general name', 'mw-cpt' ),
		'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'mw-cpt' ),
		'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'mw-cpt' ),
		'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'mw-cpt' ),
		'add_new'               => __( 'Add New', 'mw-cpt' ),
		'add_new_item'          => __( 'Add New Portfolio', 'mw-cpt' ),
		'new_item'              => __( 'New Portfolio', 'mw-cpt' ),
		'edit_item'             => __( 'Edit Portfolio', 'mw-cpt' ),
		'view_item'             => __( 'View Portfolio', 'mw-cpt' ),
		'all_items'             => __( 'All Portfolios', 'mw-cpt' ),
		'search_items'          => __( 'Search Portfolios', 'mw-cpt' ),
		'parent_item_colon'     => __( 'Parent Portfolios:', 'mw-cpt' ),
		'not_found'             => __( 'No Portfolios found.', 'mw-cpt' ),
		'not_found_in_trash'    => __( 'No Portfolios found in Trash.', 'mw-cpt' ),
		'featured_image'        => _x( 'Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mw-cpt' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mw-cpt' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mw-cpt' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mw-cpt' ),
		'archives'              => _x( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mw-cpt' ),
		'insert_into_item'      => _x( 'Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter Portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => _x('portfolio', 'portfolio', 'mw-cpt') ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        "show_in_rest"       => true,
        "description"        => __("A custom Post type for Portfolio", 'mw-cpt'),
        "taxonomies"         => ['category', 'post_tag']
	);

	register_post_type( 'portfolio', $args );
    register_taxonomy("tip_serviciu",'portfolio',[
        "label"              => __('Service Type',  'mw-cpt'),
        "rewrite"            => ['slug' =>'serviciu'],
        "show_in_rest"       => true,
    ]);
}