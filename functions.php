<?php

    define('LW_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('LW_DIR_JS', get_template_directory_uri() . '/assets/js/');
    define('LW_DIR_IMG', get_template_directory_uri() . '/assets/img/');

    include_once('inc/css-js.php');
	include_once('inc/menu.php');
	include_once('inc/fixes.php');
	// include_once('inc/sidebar.php');
	
	//сообщения от админа
	include_once('inc/admin-text.php');

    add_action('after_setup_theme', function(){
		add_theme_support('post-thumbnails', ['portfolio', 'post']);
		add_theme_support('custom-logo');
		add_theme_support('title-tag');
		// add_theme_support('post-formats', ['aside', 'quote']);
		
		add_image_size('case-thumb', 400, 300, true);

		add_theme_support( 'html5', [ 
			// 'navigation-widgets',
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'script',
			'style',
		] );
	});

	include_once('inc/modules/portfolio.php');


	