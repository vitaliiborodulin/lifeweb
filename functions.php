<?php

    add_filter('show_admin_bar', '__return_false');

    define('LW_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('LW_DIR_JS', get_template_directory_uri() . '/assets/js/');
    define('LW_DIR_IMG', get_template_directory_uri() . '/assets/img/');

    include_once('inc/css-js.php');
	include_once('inc/menu.php');
	// include_once('inc/sidebar.php');

    add_action('after_setup_theme', function(){
		// add_theme_support('post-thumbnails', ['post', 'services', 'team', 'sertificates']);
		add_theme_support('custom-logo');
		add_theme_support('title-tag');
		// add_theme_support('post-formats', ['aside', 'quote']);
		
		// add_image_size('flats-thumb', 400, 300, true);
	});


	add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 4 );
	function add_my_class_to_nav_menu( $classes, $item, $args, $depth ){
		/* $classes содержит
		Array(
			[1] => menu-item
			[2] => menu-item-type-post_type
			[3] => menu-item-object-page
			[4] => menu-item-284
		)
		*/
		if($args->container == 'div') {
			// print_r($args);

			if($item->menu_item_parent == 0) {
				$classes[] = 'col-sm-6  col-xl-3 footer-list';
			}
			// print_r($item);
			// $classes[] = '';
		}

		return $classes;
	}