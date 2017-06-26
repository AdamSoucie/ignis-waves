<?php

function ignis_child_add_styles()
{
	// Defines our child theme
	wp_enqueue_style('ignis-child', get_stylesheet_directory_uri() . '/style.css', array(), false, 'all');

	foreach ( glob( trailingslashit( get_stylesheet_directory() ) . 'framework/css/*' ) as $css_directory )
	{
		foreach ( glob( $css_directory . '/*.css' ) as $file_name )
		{
			$handle = substr( $file_name, strrpos( $file_name, '/'), -4 );
			$handle = substr( $handle, 1 );

			wp_enqueue_style( $handle, $file_name, array(), false, 'all' );
		}
	}
}
add_action('wp_enqueue_scripts', 'ignis_child_add_styles');
