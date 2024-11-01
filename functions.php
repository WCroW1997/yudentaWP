<?php
    
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/main.css');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}

add_theme_support( 'custom-logo', [
	'height'      => 62,
	'width'       => 290,
	'flex-width'  => false,
	'unlink-homepage-logo' => false, // WP 5.5
] );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action('init', 'youdenta_init');
function youdenta_init(){
	register_post_type('reviews', array(
		'labels'             => array(
			'name'               => 'Відгуки', 
			'singular_name'      => 'Відгук', 
			'add_new'            => 'Додати новий',
			'add_new_item'       => 'Додати новий відгук',
			'edit_item'          => 'Редагувати відгук',
			'new_item'           => 'Новий відгук',
			'view_item'          => 'Переглянути відгук',
			'search_items'       => 'Знайти відгук',
			'not_found'          => 'Вігуку не знайдено',
			'not_found_in_trash' => 'У кошику відгуків не знайдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Відгуки'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon'          => 'dashicons-format-status',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','excerpt' ,'thumbnail')
	) );
	register_post_type('gallery', array(
		'labels'             => array(
			'name'               => 'Галерея', 
			'singular_name'      => 'Галерея', 
			'add_new'            => 'Додати нове',
			'add_new_item'       => 'Додати нове зображення',
			'edit_item'          => 'Редагувати зображення',
			'new_item'           => 'Нове зображення',
			'view_item'          => 'Переглянути зображення',
			'search_items'       => 'Знайти зображення',
			'not_found'          => 'Зображення не знайдено',
			'not_found_in_trash' => 'У кошику зображень не знайдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Галерея'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon'          => 'dashicons-format-gallery',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail')
	) );
	register_post_type('hero', array(
		'labels'             => array(
			'name'               => 'Hero', 
			'singular_name'      => 'Hero', 
			'add_new'            => 'Додати нове',
			'add_new_item'       => 'Додати нове зображення',
			'edit_item'          => 'Редагувати зображення',
			'new_item'           => 'Нове зображення',
			'view_item'          => 'Переглянути зображення',
			'search_items'       => 'Знайти зображення',
			'not_found'          => 'Зображення не знайдено',
			'not_found_in_trash' => 'У кошику зображень не знайдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Hero'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon'          => 'dashicons-format-gallery',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail')
	) );
	register_post_type('staff', array(
		'labels'             => array(
			'name'               => 'Працівники', 
			'singular_name'      => 'Працівники', 
			'add_new'            => 'Додати нового',
			'add_new_item'       => 'Додати нового працівника',
			'edit_item'          => 'Редагувати працівника',
			'new_item'           => 'Новий працівник',
			'view_item'          => 'Переглянути працівника',
			'search_items'       => 'Знайти працівника',
			'not_found'          => 'Працівника не знайдено',
			'not_found_in_trash' => 'У кошику працівників не знайдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Працівники'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon'          => 'dashicons-businessman',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail', 'excerpt')
	) );
}

function youdenta_menus() {
	$locations = array(
		'header'	=> __( 'Header Menu' , 'youdenta'),
		'footer'	=> __( 'Footer Menu' , 'youdenta'),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'youdenta_menus');

function multi_lang($ua, $ru, $en) {
    // Получаем текущий язык сайта
    $current_language = get_locale(); // Возвращает строку вида 'uk_UA', 'ru_RU', 'en_US', и т.д.
    
    // Устанавливаем строку на основе текущего языка
    switch ($current_language) {
        case 'uk_UA':
            return $ua;
        case 'ru_RU':
            return $ru;
        case 'en_US':
        default:
            return $en;
    }
}