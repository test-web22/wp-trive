<?php 
add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme');


function style_theme() {
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,reqular,500,600&display=swap' );
	wp_enqueue_style( 'fonts-dm', 'https://fonts.googleapis.com/css?family=DM+Serif+Display:regular&display=swap"' );
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( '404', get_template_directory_uri() . '/assets/css/404.css');
	wp_enqueue_style( 'select', get_template_directory_uri() . '/assets/css/select.css');
}
function scripts_theme(){
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'select', get_template_directory_uri() . '/assets/js/select.js');
}
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

//============SVG============================================================================================================================================
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

?>