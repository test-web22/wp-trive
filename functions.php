<?php 
add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'nav_menu');	//додати меню
add_action( 'init', 'register_post_types' );// новий тип запису

function register_post_types(){

	register_post_type( 'location', [
		'label'  => null,
		'labels' => [
			'name'               => 'location', // основное название для типа записи
			'singular_name'      => 'location', // название для одной записи этого типа
			'add_new'            => 'Добавить location', // для добавления новой записи
			'add_new_item'       => 'Добавление location', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование location', // для редактирования типа записи
			'new_item'           => 'Новое location', // текст новой записи
			'view_item'          => 'Смотреть location', // для просмотра записи этого типа.
			'search_items'       => 'Искать location', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Popular destinations', // название меню
		],
		'description'            => 'dest',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title', 'content','thumbnail','excerpt','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

function nav_menu(){
	register_nav_menu('top', 'header menu');
	register_nav_menu('footer-info', 'footer menu information');
}


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