<?php

define( 'MOVETOWORDPRESS_VERSION', '0.0' );

if ( !class_exists( 'movetowordpress' ) ) {
	
class movetowordpress
{

	/**
	 * __construct()
	 */
	function __construct() {
		
		add_action( 'init', array( &$this, 'enqueue_styles' ) );
		
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

$movetowordpress = new movetowordpress();






?>