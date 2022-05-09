<?php
/*
Plugin Name: Books
Plugin URL: http://
Description: A Books plugin
Version: 100.50
Author: Author
Author URI: http://
Contributors: corsonr
*/
/*
 * Register  Books
 *
 */
function books_setup_post_types() {

	$books_labels =  apply_filters( 'books_labels', array(
		'name'                => 'Books',
		'singular_name'       => 'Books',
		'add_new'             => __('Add New Book', 'books'),
		'add_new_item'        => __('Add New Book', 'books'),
		'edit_item'           => __('Edit Book', 'books'),
		'edit_item'           => __('Edit Book', 'books'),
		'new_item'            => __('New Book', 'books'),
		'all_items'           => __('All Books', 'books'),
		'view_item'           => __('View Books', 'books'),
		'search_items'        => __('Search Books', 'books'),
		'not_found'           => __('No Book found', 'books'),
		'not_found_in_trash'  => __('No Book found in Trash', 'books'),
		'parent_item_colon'   => '',
		'menu_name'           => __('Books', 'books'),
		'exclude_from_search' => true
	) );


	$books_args = array(
		'menu_icon' => 'dashicons-book',
		'labels' 			=> $books_labels,
		'public' 			=> true,
		'publicly_queryable'=> true,
		'show_ui' 			=> true,
		'show_in_menu' 		=> true,
		'query_var' 		=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> true,
		'hierarchical' 		=> true,
		'supports' 			=> apply_filters('books_supports', array( 'title','editor','thumbnail') ),
		//'taxonomies' => array('books', 'post_tag'),
		//'taxonomies' => array( 'books', 'books_category' ),
	);
	register_post_type( 'books', apply_filters( 'boattours_post_type_args', $books_args ) );

}
add_action('init', 'books_setup_post_types');
//add category...you can not give slug as category....do prefix or postfix
add_action( 'init', 'create_books_taxonomies', 0 );

function create_books_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Books Category', 'taxonomy general name' ),
    'singular_name' => _x( 'books_category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search ocation Category' ),
    'popular_items' => __( 'Popular Book Category' ),
    'all_items' => __( 'All Book Category' ),
    'parent_item' => __( 'Parent Book Category' ),
    'parent_item_colon' => __( 'Parent Book Category:' ),
    'edit_item' => __( 'Edit Book Category' ),
    'update_item' => __( 'Update Book Category' ),
    'add_new_item' => __( 'Add New Book Category' ),
    'new_item_name' => __( 'New Book Category Name' ),
  );
  register_taxonomy('books_category',array('books'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'books_category' ),
  ));
}