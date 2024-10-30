<?php
/*
Plugin Name: Button Love
Plugin URI: http://www.russcatanach.com
Description: A really simple plugin that uses a shortcode to create buttons in your content.  It creates Orange, Blue, Green and Red buttons.
Version: 0.5.0
Author: Russ Catanach
Author URI: http://www.russcatanach.com
License:  GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


*/

// Add Shortcode
function buttonlove_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '#',
			'color' => 'blue',
		), $atts )
	);

	// Code
	return '<div id="buttonlove"><a href="' . $link . '" class="buttonlove-' . $color . '">' . $content . '</a></div>';
}
add_shortcode( 'buttonlove', 'buttonlove_shortcode' );

function buttonlove_css()
{
	wp_register_style( 'custom-style', plugins_url( '/buttonlove-style.css', __FILE__ ), 'all' );
	wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'buttonlove_css' );

?>