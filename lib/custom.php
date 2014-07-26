<?php
/**
 * Custom functions
 */

function create_post_type() {

	register_post_type( 'book',
		array(
			'labels' => array(
				'name' => __( 'Books' ),
				'singular_name' => __( 'Book' )
			),
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'comments' ),
			'taxonomies' => array( 'post_tag', 'category '),
			'public' => true,
			'has_archive' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'books')
		)
	);
	register_taxonomy_for_object_type('category', 'book');
	register_taxonomy_for_object_type('people', 'book');
	
	register_post_type( 'podcast',
		array(
			'labels' => array(
				'name' => __( 'Podcasts' ),
				'singular_name' => __( 'Podcast' )
			),
			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'comments' ),
			'taxonomies' => array( 'post_tag', 'category '),
			'public' => true,
			'has_archive' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'podcasts')
		)
	);	
	register_taxonomy_for_object_type('category', 'podcast');
	
}
add_action( 'init', 'create_post_type', 0 );

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
	// Add new "Programs" taxonomy
	register_taxonomy('programs', 
		array('podcast'), 
		array(
			// Hierarchical taxonomy (like categories)
			'hierarchical' => true,
			// This array of options controls the labels displayed in the WordPress Admin UI
			'labels' => array(
				'name' => _x( 'Programs', 'taxonomy general name' ),
				'singular_name' => _x( 'Program', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Programs' ),
				'all_items' => __( 'All Programs' ),
				'parent_item' => __( 'Parent Program' ),
				'parent_item_colon' => __( 'Parent Program:' ),
				'edit_item' => __( 'Edit Program' ),
				'update_item' => __( 'Update Program' ),
				'add_new_item' => __( 'Add New Program' ),
				'new_item_name' => __( 'New Program Name' ),
				'menu_name' => __( 'Programs' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'programs', // This controls the base slug that will display before each term
			'with_front' => true, // Display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
	
	// Add new "People" taxonomy
	register_taxonomy('people', 
		array('post', 'book', 'podcast'), 
		array(
			'hierarchical' => false,
			// This array of options controls the labels displayed in the WordPress Admin UI
			'labels' => array(
				'name' => _x( 'People', 'taxonomy general name' ),
				'singular_name' => _x( 'Person', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search People' ),
				'all_items' => __( 'All People' ),
				'parent_item' => __( 'Parent Person' ),
				'parent_item_colon' => __( 'Parent Person:' ),
				'edit_item' => __( 'Edit Person' ),
				'update_item' => __( 'Update Person' ),
				'add_new_item' => __( 'Add New Person' ),
				'new_item_name' => __( 'New Person Name' ),
				'menu_name' => __( 'People' ),
			),
			'query_var' => true,
			'rewrite' => true
		)
	);
}
add_action( 'init', 'add_custom_taxonomies', 0 );

?>