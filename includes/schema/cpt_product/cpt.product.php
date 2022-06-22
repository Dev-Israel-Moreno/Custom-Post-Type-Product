<?php

include plugin_dir_path( __FILE__ ) . 'cf.product.php';

/**
 * Creo un nuevo tipo de post "producto".
 */

add_action( 'init','register_post_type_producto' );

function register_post_type_producto (){

    $labels = array(
        'name'                  => _x( 'Productos', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Producto', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Productos', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Producto', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Producto', 'textdomain' ),
        'new_item'              => __( 'New Producto', 'textdomain' ),
        'edit_item'             => __( 'Edit Producto', 'textdomain' ),
        'view_item'             => __( 'View Producto', 'textdomain' ),
        'all_items'             => __( 'All Productos', 'textdomain' ),
        'search_items'          => __( 'Search Productos', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Productos:', 'textdomain' ),
        'not_found'             => __( 'No Productos found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Productos found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Producto Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Producto archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Producto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Producto', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Productos list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Productos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Productos list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Producto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );


    register_post_type( 'Producto', $args );   

}

