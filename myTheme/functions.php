<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'mytheme_setup' ) ) {
	function mytheme_setup(){
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 100, 100);
	}

}


if ( ! function_exists( 'mysite_load_style' ) ) {
	function mysite_load_style() {
		wp_register_style( 'material_css', get_template_directory_uri() . '/assets/vendor/materialize/css/materialize.min.css');
		wp_register_style('material_icon', "https://fonts.googleapis.com/icon?family=Material+Icons");
		wp_register_style('theme_style', get_template_directory_uri().'/mysite.css');
		wp_register_style('font_icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style( 'mysite_style', get_stylesheet_uri(), array( 'material_css', 'material_icon', 'font_icons' ,'theme_style' ));
		
	}
	add_action( 'wp_print_styles', 'mysite_load_style' );
}


/* ----------------------------------------------
LOAD VENDOR
------------------------------------------------ */
if ( ! function_exists( 'mysite_load_script' ) ) {
	add_action('wp_enqueue_scripts', 'mysite_load_script');

	function mysite_load_script(){
		wp_register_script( 
			'my_script', 
			get_template_directory_uri() . '/assets/js/home.js', 
			array( 'jquery' )
		);
		wp_register_script( 
			'materialize_script', 
			get_template_directory_uri() . '/assets/vendor/materialize/js/materialize.min.js', 
			array( 'jquery' )
		);
		wp_enqueue_script( 'my_script' );
		// wp_enqueue_script( 'materialize_script' );
	}
}

// no space below the last line
?>