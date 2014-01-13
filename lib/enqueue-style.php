<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
function nivijah_enqueue_style()
{
	// foundation stylesheet
	wp_register_style( 'nivijah-foundation-stylesheet', get_template_directory_uri() . '/css/app.css', array(), '' );

	// Register the main style
	wp_register_style( 'nivijah-stylesheet', get_template_directory_uri() . '/css/style.css', array(), '', 'all' );
	
	wp_enqueue_style( 'nivijah-foundation-stylesheet' );
	wp_enqueue_style( 'nivijah-stylesheet' );
	
	// Register child theme style if using child theme
	if ( is_child_theme() ) {
	
		wp_register_style( 'nivijah-child-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		
		wp_enqueue_style( 'nivijah-child-stylesheet' );
	}
}
add_action( 'wp_enqueue_scripts', 'nivijah_enqueue_style' );
?>
