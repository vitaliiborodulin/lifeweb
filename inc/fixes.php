<?php

  // Отменяем обертку картинок в тег `<p>` в контенте
	add_filter('the_content', 'remove_img_ptags_func');
	function remove_img_ptags_func( $content ){
		return preg_replace('/<p>\s*((?:<a[^>]+>)?\s*<img[^>]+>\s*(?:<\/a>)?)\s*<\/p>/i', '\1', $content );
    }
    
  // Установим максимальное количество ревизий записи
  if( ! defined('WP_POST_REVISIONS') ) define('WP_POST_REVISIONS', 5);

  // удаляет H2 из шаблона пагинации
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
      <h2 class="screen-reader-text">%2$s</h2>
      <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
    <nav class="navigation %1$s" role="navigation">
      <div class="nav-links">%3$s</div>
    </nav>    
    ';
  }

  // выводим пагинацию
  the_posts_pagination( array(
    'end_size' => 2,
  ) ); 