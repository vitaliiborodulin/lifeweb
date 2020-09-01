<?php 

add_action('widgets_init', function(){

    register_sidebar([
        'name' => 'test',
        'id' => 'sidebar-test',
        'description' => 'Для теста',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title' => '',
        'after_title' => ''
    ]);
    // register_sidebar([
    //     'name' => 'Footer',
    //     'id' => 'sidebar-footer',
    //     'description' => 'Для надписи внизу слева',
    //     'before_widget' => '',
    //     'after_widget'  => '',
    //     'before_title' => '',
    //     'after_title' => ''
    // ]);
});
