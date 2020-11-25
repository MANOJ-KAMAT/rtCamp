<?php

/**************************************************
    * creating the custom posttype
***************************************************/

function wpb_register_book_custom_post_type() {
 
	$labels = array(
		'name'               => __('Books', 'wp-book'),						//General name for the post type
		'singular_name'      => __('Book', 'wp-book') ,						//Name for one object of post type
		'add_new'            => __('Add New', 'wp-book'),					//for adding a new singular item
		'add_new_item'       => __('Add New Book', 'wp-book'),				//for adding a singular item
		'edit_item'          => __('Edit Book', 'wp-book'),					//for editing a singular item
		'new_item'           => __('New Book', 'wp-book'),					//for the new item page title
		'all_items'          => __('All Books', 'wp-book'),					//signify all items in a submenu link
		'view_item'          => __('View Book', 'wp-book'),					//for viewing a singular item
		'search_items'       => __('Search Books', 'wp-book'),				//for searching plural items
		'not_found'          =>  __('No books found','wp-book'),			//used when no items are found
		'not_found_in_trash' => __('No books found in Trash', 'wp-book'),	//used when no items are in the Trash
		'parent_item_colon'  => __('', 'wp-book'),							//to prefix parents of hierarchical items
		'menu_name'          => __('Books', 'wp-book'),						//for the menu name
	);
 
	$args = array(
		'labels'             => $labels,	
		'public'             => true,
		'hierarchical'       => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'excerpt', 'comments', 'editor' ),
	);

/**************************************************
    * registering the custom book post type
***************************************************/
	register_post_type( 'book', $args );
 
}
add_action( 'init', 'wpb_register_book_custom_post_type' );