<?php

    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('bootstrap-grid', LW_DIR_CSS . 'bootstrap-grid.css');
        wp_enqueue_style('bootstrap-reboot', LW_DIR_CSS . 'bootstrap-reboot.css');
        wp_enqueue_style('slick', LW_DIR_CSS . 'slick.css');
        wp_enqueue_style('slick-theme', LW_DIR_CSS . 'slick-theme.css');
        wp_enqueue_style('template', LW_DIR_CSS . 'template.css');
        wp_enqueue_style('jquery-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], null, true);
        wp_enqueue_script('jquery-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', [], null, true);
        wp_enqueue_script('slick', LW_DIR_JS . 'slick.min.js',  [], null, true);
        wp_enqueue_script('template', LW_DIR_JS . 'template.js',  [], null, true);
    });