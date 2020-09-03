<?php

// Хук в 'wp_dashboard_setup', чтобы зарегистрировать нашу функцию среди других
add_action('wp_dashboard_setup', 'xaaser_add_dashboard_widgets' );

// Создаем функцию, используя хук действия
function xaaser_add_dashboard_widgets() {
	wp_add_dashboard_widget('xaaser_dashboard_widget', 'От админа:', 'xaaser_dashboard_widget_function');
}

function xaaser_dashboard_widget_function(){
    // Показать то, что вы хотите показать
    echo "<hr><h3>Что сделано на данном этапе 7</h3><br>";
    echo "<ol>
    <li>Сделан шаблон вывода постов в блоге, в том числе красивая анимация с сайта-донора!</li>
    <li>Внедрены метки (теги) для каждой новости</li>
    <li>Сделан шаблон вывода в метке</li>
    <li>Сделан шаблон вывода подстраниц</li>
    <li>Интегрирован сербский язык</li>
    </ol>";
	
}

