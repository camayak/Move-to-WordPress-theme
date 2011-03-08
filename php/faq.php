<?php
/**
 * class faq
 */
if ( class_exists( 'm2wp_faqs' ) ) {
	
class m2wp_faqs {
	
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

		register_post_type( 'm2wp_faq',
			array(
				'labels' => array(
		        	'name' => 'FAQs',
					'singular_name' => 'FAQ',
						'add_new_item' => 'Add New FAQ',
						'edit_item' => 'Edit FAQ',
						'new_item' => 'New FAQ',
						'view' => 'View FAQ',
						'view_item' => 'View FAQ',
						'search_items' => 'Search FAQs',
						'not_found' => 'No FAQs found',
						'not_found_in_trash' => 'No FAQs found in Trash',
						'parent' => 'Parent FAQ'
				),
				'menu_position' => 10,
				'public' => true,
				'rewrite' => array(
					'slug' => 'faqs'
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
	
} // END class m2wp_faq
	
} // END if ( class_exists( 'm2wp_faq' ) )


?>