<?php
/**
 * @todo Register 'step' custom post type
 * @todo Register 'faq' custom post type
 */

define( 'MOVETOWORDPRESS_VERSION', '0.0' );

include( 'php/m2wp_faqs.php' );

if ( !class_exists( 'movetowordpress' ) ) {
	
class movetowordpress
{

	/**
	 * __construct()
	 */
	function __construct() {
		
		add_action( 'init', array( &$this, 'enqueue_styles' ) );
		
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		
		$this->faqs = new m2wp_faqs();
		
	} // END __construct()
	
	/**
	 * enqueue_styles()
	 */
	function enqueue_styles() {
		
		if ( !is_admin() ) { 
			wp_enqueue_style( 'movetowordpress', get_bloginfo( 'template_directory' ) . '/style.css', false, MOVETOWORDPRESS_VERSION );
		}
		
	} // END enqueue_styles()
	
} // END class movetowordpress
	
} // END if ( !class_exists( 'movetowordpress' ) )

global $m2wp;
$m2wp = new movetowordpress();






?>