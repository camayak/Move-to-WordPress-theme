<?php
/**
 * class m2wp_steps
 */
if ( !class_exists( 'm2wp_steps' ) ) {
	
class m2wp_steps {
	
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

		register_post_type( 'm2wp_step',
			array(
				'labels' => array(
		        	'name' => 'Steps',
					'singular_name' => 'Step',
						'add_new_item' => 'Add New Step',
						'edit_item' => 'Edit Step',
						'new_item' => 'New Step',
						'view' => 'View Step',
						'view_item' => 'View Step',
						'search_items' => 'Search Steps',
						'not_found' => 'No Steps found',
						'not_found_in_trash' => 'No Steps found in Trash',
						'parent' => 'Parent Step'
				),
				'menu_position' => 6,
				'public' => true,
				'rewrite' => array(
					'slug' => 'steps'
				),
				'supports' => array(
					'title',
					'editor',
					'comments',
					'excerpt',
					'thumbnail',
				),
				'taxonomies' => array(),
			)
		);
			
	} // END create_post_type()
	
} // END class m2wp_steps
	
} // END if ( class_exists( 'm2wp_steps' ) )


?>