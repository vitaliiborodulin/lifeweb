<?php

//Создаем новый тип записей
add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('portfolio', array(
		'label' => null,
		'labels' => array(
			'name' => 'Портфолио', // основное название для типа записи
			'singular_name' => 'Портфолио', // название для одной записи этого типа
			'add_new' => 'Добавить работу', // для добавления новой записи
			'add_new_item' => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item' => 'Редактирование работы', // для редактирования типа записи
			'new_item' => 'Новая работа', // текст новой записи
			'view_item' => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items' => 'Искать работу', // для поиска по этим типам записи
			'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon' => '', // для родителей (у древовидных типов)
			'menu_name' => 'Портфолио', // название меню
		),
		'description' => '',
		'public' => true,
		'publicly_queryable' => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui' => true, // зависит от public
		'show_in_menu' => true, // показывать ли в меню адмнки
		'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus' => true, // зависит от public
		'show_in_rest' => true, // добавить в REST API. C WP 4.7
		'rest_base' => null, // $post_type. C WP 4.7
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-gallery',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		// 'taxonomies' => array('skills'),
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
	));
}
//обнуляем создание кропов для кейсов
add_filter('intermediate_image_sizes', function($sizes){
    if(isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'portfolio'){
        $sizes = [];
    }

    return $sizes;
});