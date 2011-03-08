<?php
/**
 * class m2wp_switchers
 */
if ( !class_exists( 'm2wp_switchers' ) ) {
	
class m2wp_switchers {
	
	/**
	 * __construct()
	 */
	function __construct() {
		
		add_action( 'init', array( &$this, 'create_post_type' ) );
		
	} // END __construct()
	
	/**
	 * create_post_type()
	 * Register the custom post type with WordPress
	 */
	function create_post_type() {

		register_post_type( 'm2wp_switcher',
			array(
				'labels' => array(
		        	'name' => 'Switchers',
					'singular_name' => 'Switcher',
						'add_new_item' => 'Add New Switcher',
						'edit_item' => 'Edit Switcher',
						'new_item' => 'New Switcher',
						'view' => 'View Switcher',
						'view_item' => 'View Switcher',
						'search_items' => 'Search Switcher',
						'not_found' => 'No Switchers found',
						'not_found_in_trash' => 'No Switchers found in Trash',
						'parent' => 'Parent Switcher'
				),
				'menu_position' => 5,
				'public' => true,
				'rewrite' => array(
					'slug' => 'switchers'
				),
				'supports' => array(
					'title',
					'editor',
					'comments',
					'excerpt',
					'thumbnail',
					'custom-fields',
				),
				'taxonomies' => array(),
			)
		);
			
	} // END create_post_type()
	
} // END class m2wp_switchers
	
} // END if ( class_exists( 'm2wp_switchers' ) )


?>