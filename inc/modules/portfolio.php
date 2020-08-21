<?php

register_post_type('portfolio', [
	'labels' => array(
		'name'               => 'Кейсы', // основное название для типа записи
		'singular_name'      => 'Кейс', // название для одной записи этого типа
		'add_new'            => 'Добавить новый', // для добавления новой записи
		'add_new_item'       => 'Добавление кейса', // заголовка у вновь создаваемой записи в админ-панели.
		'edit_item'          => 'Редактирование кейса', // для редактирования типа записи
		'new_item'           => 'Новый кейс', // текст новой записи
		'view_item'          => 'Смотреть кейс', // для просмотра записи этого типа.
		'search_items'       => 'Искать кейс', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => '', // для родителей (у древовидных типов)
		'menu_name'          => 'Портфолио', // название меню
	),
	'public'              => true,
	'menu_position'       => 25,
	'menu_icon'           => 'dashicons-screenoptions', 
	'hierarchical'        => false,
	'supports'            => ['title', 'editor', 'thumbnail'],
	'has_archive'         => true
]);

//обнуляем создание кропов для кейсов
add_filter('intermediate_image_sizes', function($sizes){
    if(isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'portfolio'){
        $sizes = [];
    }

    return $sizes;
});