<?php

    add_action('after_setup_theme', function(){
        register_nav_menu('header-top', 'Верхнее в шапке');
        // register_nav_menu('footer', 'Для подвала');
    });