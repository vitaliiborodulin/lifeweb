<?php

    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('bootstrap-grid', LW_DIR_CSS . 'bootstrap-grid.css');
        wp_enqueue_style('bootstrap-reboot', LW_DIR_CSS . 'bootstrap-reboot.css');
        wp_enqueue_style('slick', LW_DIR_CSS . 'slick.css');
        wp_enqueue_style('slick-theme', LW_DIR_CSS . 'slick-theme.css');
        wp_enqueue_style('template', LW_DIR_CSS . 'template.css');
        // wp_enqueue_style('fontawesome', LW_DIR_CSS . 'fontawesome.min.css');
        wp_enqueue_style('jquery-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], null, true);
        wp_enqueue_script('jquery-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', [], null, true);
        wp_enqueue_script('slick', LW_DIR_JS . 'slick.min.js',  [], null, true);
        wp_enqueue_script('template', LW_DIR_JS . 'template.js',  [], null, true);
        // wp_enqueue_script('main', LW_DIR_JS . 'main.js',  [], null, true);
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