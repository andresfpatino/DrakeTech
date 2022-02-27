<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function products_post_type() {
	$labels = array(
        'name'                  => _x( 'Products', 'Post type general name', 'DKT' ),
        'singular_name'         => _x( 'Product', 'Post type singular name', 'DKT' ),
        'menu_name'             => _x( 'Products', 'Admin Menu text', 'DKT' ),
        'add_new'               => __( 'Add product', 'DKT' ),
        'add_new_item'          => __( 'Add new product', 'DKT' ),
        'new_item'              => __( 'New product', 'DKT' ),
        'edit_item'             => __( 'Edit product', 'DKT' ),
        'view_item'             => __( 'View product', 'DKT' ),
        'all_items'             => __( 'All products', 'DKT' ),
        'search_items'          => __( 'Search product', 'DKT' ),
        'not_found'             => __( 'Product not found', 'DKT' ),
        'not_found_in_trash'    => __( 'Product not found', 'DKT' ),
        'featured_image'        => _x( 'Thumbnail', '', 'DKT' ),
    );    
	$args = array(
        'labels'             => $labels,
		'public'             => true,
        'show_ui'            => true,	
        'has_archive'        => false,
        'rewrite'            => array( 'slug' => 'products'),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-cart',
		'menu_position'      => 5,
		'supports'           => array('title', 'thumbnail')
	);
	register_post_type( 'products', $args );	
}
add_action( 'init', 'products_post_type' );


/* Flush Rewrite - regenera .htacess*/
function products_rewrite_flush(){
    products_post_type();
    flush_rewrite_rules();
}  