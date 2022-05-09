<?php
//load site styles
function espi_theme_assets() {
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',null,'4.7.0' );
  wp_enqueue_style( 'normalize-reset', get_template_directory_uri() . '/assets/css/normalize.css',null,'8.0.1' );
  wp_enqueue_style( 'espi-parent-style', get_template_directory_uri() . '/assets/css/mainStyle.css', array('normalize-reset'), '0.0.1');
  wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/assets/js/mainScripts.js', array('jquery'),'0.0.1' );
}
add_action( 'wp_enqueue_scripts', 'espi_theme_assets' );

// lets wordpress build our <title> tags
add_theme_support( 'title-tag' );



//register in ACF
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( [
		'page_title' => 'Theme Options',
		'menu_title' => 'Theme Options',
		'menu_slug' => 'theme_options',
		'capability' => 'edit_theme_options',
		'parent_slug' => '',
		'position' => 3,
		'icon_url' => false,
		'redirect' => false,
		'post_id' => 'options',
		'autoload' => false,
		'update_button' => 'Update',
	] );
}