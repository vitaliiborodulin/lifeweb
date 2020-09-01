<?php
  // add_filter('show_admin_bar', '__return_false');

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

  // Удаление виджетов из Консоли WordPress
add_action( 'wp_dashboard_setup', 'clear_wp_dash' );
function clear_wp_dash(){
	$dash_side   = & $GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
	$dash_normal = & $GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];

	unset( $dash_side['dashboard_quick_press'] );       // Быстрая публикация
	unset( $dash_side['dashboard_recent_drafts'] );     // Последние черновики
	unset( $dash_side['dashboard_primary'] );           // Блог WordPress
	unset( $dash_side['dashboard_secondary'] );         // Другие Новости WordPress

	unset( $dash_normal['dashboard_incoming_links'] );  // Входящие ссылки
	// unset( $dash_normal['dashboard_right_now'] );       // Прямо сейчас
	unset( $dash_normal['dashboard_recent_comments'] ); // Последние комментарии
	unset( $dash_normal['dashboard_plugins'] );         // Последние Плагины
	unset( $dash_normal['dashboard_site_health'] );         // Здоровье

	unset( $dash_normal['dashboard_activity'] );        // Активность
}

// Удаление виджета "Добро пожаловать"
remove_action( 'welcome_panel', 'wp_welcome_panel' );

// Отключаем стандартные виджеты WordPress
add_action( 'widgets_init', 'unregister_basic_widgets' );
function unregister_basic_widgets() {
	unregister_widget('WP_Widget_Pages');            // Виджет страниц
	unregister_widget('WP_Widget_Calendar');         // Календарь
	unregister_widget('WP_Widget_Archives');         // Архивы
	unregister_widget('WP_Widget_Links');            // Ссылки
	unregister_widget('WP_Widget_Meta');             // Мета виджет
	unregister_widget('WP_Widget_Search');           // Поиск
	unregister_widget('WP_Widget_Text');             // Текст
	unregister_widget('WP_Widget_Categories');       // Категории
	unregister_widget('WP_Widget_Recent_Posts');     // Последние записи
	unregister_widget('WP_Widget_Recent_Comments');  // Последние комментарии
	unregister_widget('WP_Widget_RSS');              // RSS
	unregister_widget('WP_Widget_Tag_Cloud');        // Облако меток
	unregister_widget('WP_Nav_Menu_Widget');         // Меню
	unregister_widget('WP_Widget_Media_Audio');      // Audio
	unregister_widget('WP_Widget_Media_Video');      // Video
	unregister_widget('WP_Widget_Media_Gallery');    // Gallery
	unregister_widget('WP_Widget_Media_Image');      // Image
}

//Удаляем уведомление об обновлении WordPress для всех кроме админа
// add_action( 'admin_head', function () {
// 	if ( ! current_user_can( 'manage_options' ) ) {
// 		remove_action( 'admin_notices', 'update_nag', 3 );
// 		remove_action( 'admin_notices', 'maintenance_nag', 10 );
// 	}
// } );

// Добавляем все типы записей в виджет "Прямо сейчас" в консоли
add_action( 'dashboard_glance_items' , 'add_right_now_info' );
function add_right_now_info( $items ){

	if( ! current_user_can('edit_posts') ) return $items; // выходим

	// типы записей
	$args = array( 'public' => true, '_builtin' => false );

	$post_types = get_post_types( $args, 'object', 'and' );

	foreach( $post_types as $post_type ){
		$num_posts = wp_count_posts( $post_type->name );
		$num       = number_format_i18n( $num_posts->publish );
		$text      = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );

		$items[] = "<a href=\"edit.php?post_type=$post_type->name\">$num $text</a>";
	}

	// таксономии
	$taxonomies = get_taxonomies( $args, 'object', 'and' );

	foreach( $taxonomies as $taxonomy ){
		$num_terms = wp_count_terms( $taxonomy->name );
		$num       = number_format_i18n( $num_terms );
		$text      = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name , intval( $num_terms ) );

		$items[] = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num $text</a>";
	}

	// пользователи
	// global $wpdb;

	// $num  = $wpdb->get_var("SELECT COUNT(ID) FROM $wpdb->users");
	// $text = _n( 'User', 'Users', $num );

	// $items[] = "<a href='users.php'>$num $text</a>";

	return $items;
}

// заменим слово "записи" на "посты" для типа записей 'post'
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
	// заменять автоматически нельзя: Запись = Статья, а в тексте получим "Просмотреть статья"

	$new = array(
		'name'                  => 'Посты',
		'singular_name'         => 'Пост',
		'add_new'               => 'Добавить пост',
		'add_new_item'          => 'Добавить пост',
		'edit_item'             => 'Редактировать пост',
		'new_item'              => 'Новый пост',
		'view_item'             => 'Просмотреть пост',
		'search_items'          => 'Поиск постов',
		'not_found'             => 'Посты не найдены.',
		'not_found_in_trash'    => 'Посты в корзине не найдены.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все посты',
		'archives'              => 'Архивы постов',
		'insert_into_item'      => 'Вставить в пост',
		'uploaded_to_this_item' => 'Загруженные для этого поста',
		'featured_image'        => 'Миниатюра поста',
		'filter_items_list'     => 'Фильтровать список постов',
		'items_list_navigation' => 'Навигация по списку постов',
		'items_list'            => 'Список постов',
		'menu_name'             => 'Посты',
		'name_admin_bar'        => 'Пост', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}

// Удаление файлов license.txt и readme.html для защиты
if( is_admin() && ! defined('DOING_AJAX') ){
	$license_file = ABSPATH .'/license.txt';
	$readme_file = ABSPATH .'/readme.html';

	if( file_exists($license_file) && current_user_can('manage_options') ){
		$deleted = unlink($license_file) && unlink($readme_file);

		if( ! $deleted  )
			$GLOBALS['readmedel'] = 'Не удалось удалить файлы: license.txt и readme.html из папки `'. ABSPATH .'`. Удалите их вручную!';
		else
			$GLOBALS['readmedel'] = 'Файлы: license.txt и readme.html удалены из из папки `'. ABSPATH .'`.';

		add_action( 'admin_notices', function(){  echo '<div class="error is-dismissible"><p>'. $GLOBALS['readmedel'] .'</p></div>'; } );
	}
}

## Удаление базовых элементов (ссылок) из тулбара
add_action( 'add_admin_bar_menus', function(){
	/* доступно для удаления:

	remove_action( 'admin_bar_menu', 'wp_admin_bar_my_account_menu', 0 );  // Внутренние ссылки меню профиля
	remove_action( 'admin_bar_menu', 'wp_admin_bar_search_menu', 4 );      // поиск
	remove_action( 'admin_bar_menu', 'wp_admin_bar_my_account_item', 7 );  // Полностью меню профиля

	// Связанное с сайтом
	remove_action( 'admin_bar_menu', 'wp_admin_bar_sidebar_toggle', 0 );   // 
	remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 );         // WordPress ссылки (WordPress лого)
	remove_action( 'admin_bar_menu', 'wp_admin_bar_my_sites_menu', 20 );   // мои сайты
	remove_action( 'admin_bar_menu', 'wp_admin_bar_site_menu', 30 );       // сайты
	remove_action( 'admin_bar_menu', 'wp_admin_bar_customize_menu', 40 );  // настроить тему
	remove_action( 'admin_bar_menu', 'wp_admin_bar_updates_menu', 50 );    // обновления

	// Content related.
	if ( ! is_network_admin() && ! is_user_admin() ) {
		// комментарии
		remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
		// добавить запись, страницу, медиафайл и т.д.
		remove_action( 'admin_bar_menu', 'wp_admin_bar_new_content_menu', 70 );
	}
	// редактировать
	remove_action( 'admin_bar_menu', 'wp_admin_bar_edit_menu', 80 );

	// вся дополнительная группа (поиск и аккаунт) расположена справа в меню
	remove_action( 'admin_bar_menu', 'wp_admin_bar_add_secondary_groups', 200 ); 
	*/

	// удаляем
	remove_action( 'admin_bar_menu', 'wp_admin_bar_search_menu', 4 );    // поиск
  //remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 );      // WordPress ссылки (WordPress лого)
  
  if ( ! is_network_admin() && ! is_user_admin() ) {
		// комментарии
		remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
		// добавить запись, страницу, медиафайл и т.д.
		remove_action( 'admin_bar_menu', 'wp_admin_bar_new_content_menu', 70 );
	}
});

//Удаление пунктов меню в админ-панели
add_action('admin_menu', 'remove_menus');
function remove_menus(){
	global $menu;
	$restricted = array(
		// __('Dashboard'),
		// __('Posts'),
		// __('Media'),
		// __('Links'),
		// __('Pages'),
		// __('Appearance'),
		// __('Tools'),
		// __('Users'),
		// __('Settings'),
		__('Comments'),
		// __('Plugins')
	);
	end ($menu);
	while (prev($menu)){
		$value = explode(' ', $menu[key($menu)][0]);
		if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
			unset($menu[key($menu)]);
		}
	}
}

//Свой логотип на странице входа
add_action( 'login_head', 'my_custom_login_logo' );
function my_custom_login_logo(){

	echo '
	<style type="text/css">
	h1 a {  background-image:url('.get_bloginfo('template_directory').'/assets/img/life-web.png) !important;  }
	</style>
	';
}

/* Ставим ссылку с логотипа на сайт, а не на wordpress.org */
add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
 
/* убираем title в логотипе "сайт работает на wordpress" */
add_filter( 'login_headertitle', create_function('', 'return false;') );

// Изменение внутреннего логотипа админки. Для версий с dashicons
add_action('add_admin_bar_menus', 'reset_admin_wplogo');
function reset_admin_wplogo(  ){
	remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // удаляем стандартную панель (логотип)

	add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // добавляем свою
}
function my_admin_bar_wp_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'wp-logo',
		'title' => '<img style="width:50px;height:auto;" src="'. get_bloginfo('template_directory') .'/assets/img/life-web.png" alt="" >', // иконка dashicon
				 // можно вставить картинку <img style="max-width:100%;height:auto;" src="'. get_bloginfo('template_directory') .'/images/custom-logo.gif" alt="" >
		// 'href'  => home_url('/about/'),
		// 'meta'  => array(
		// 	'title' => 'О моем сайте',
		// ),
	) );
}

// CSS для страницы входа (login)
## Нужно создать файл 'wp-login.css' в папке темы
add_action('login_head', 'my_loginCSS');
function my_loginCSS() {
	echo '<link rel="stylesheet" type="text/css" href="'. get_template_directory_uri() .'/wp-login.css"/>';
}

// CSS стили для админ-панели. Нужно создать файл 'wp-admin.css' в папке темы
add_action('admin_enqueue_scripts', 'my_admin_css', 99);
function my_admin_css(){
	wp_enqueue_style('my-wp-admin', get_template_directory_uri() .'/wp-admin.css' );
}

// max-width для встраиваемых в запись объектов (Youtube)
if ( ! isset( $content_width ) )
$content_width = 660;

// Изменение текста в подвале админ-панели
add_filter('admin_footer_text', 'footer_admin_func');
function footer_admin_func () {
	echo 'Разработка темы: <a href="http://xaaser2006.ru" target="_blank">Xaaser2006</a>';
}

## удаляет из профиля поля: AIM, Yahoo IM, Jabber / Google Talk
add_filter('user_contactmethods', 'remove_contactmethod');
function remove_contactmethod( $contactmethods ) {
	// unset($contactmethods['aim']);
	// unset($contactmethods['jabber']);
	// unset($contactmethods['yim']);

	return $contactmethods;
}

// Добавление класса `has_sidebar` к тегу `<body>`, если есть сайдбар
// add_filter('body_class', 'has_sidebar_func');
// function has_sidebar_func( $classes ){
// 	if( is_active_sidebar('sidebar') ){
// 		// добавляем класс
// 		$classes[] = 'has_sidebar';
// 	}

// 	return $classes;
// }

// Подключение скрипта html5 для IE с cdn
add_action('wp_head', 'IEhtml5_shim_func');
function IEhtml5_shim_func(){
	echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->';
	// или если нужна еще и поддержка при печати
	// echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->';
}

// Полное Удаление версии WP
remove_action('wp_head', 'wp_generator'); // из заголовка
add_filter('the_generator', '__return_empty_string'); // из фидов и URL

// Отключим выводи ошибок на странице авторизации
add_filter('login_errors', 'login_obscure_func');
function login_obscure_func(){
	return 'Ошибка: вы ввели неправильный логин или пароль.';
}

// Отключим возможность редактировать файлы в админке для тем, плагинов
define('DISALLOW_FILE_EDIT', true);

// закроем возможность публикации через xmlrpc.php
add_filter('xmlrpc_enabled', '__return_false');