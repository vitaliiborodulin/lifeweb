<?php

    add_filter('show_admin_bar', '__return_false');

    define('LW_DIR_CSS', get_template_directory_uri() . '/assets/css/');
	define('LW_DIR_JS', get_template_directory_uri() . '/assets/js/');
    define('LW_DIR_IMG', get_template_directory_uri() . '/assets/img/');

    include_once('inc/css-js.php');
    include_once('inc/menu.php');

    add_action('after_setup_theme', function(){
		// add_theme_support('post-thumbnails', ['post', 'services', 'team', 'sertificates']);
		// add_theme_support('custom-logo');
		add_theme_support('title-tag');
		// add_theme_support('post-formats', ['aside', 'quote']);
		
		// add_image_size('flats-thumb', 400, 300, true);
	});

    