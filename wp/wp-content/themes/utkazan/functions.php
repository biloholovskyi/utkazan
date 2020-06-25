<?php
// подключение скриптов
add_action('wp_enqueue_scripts', 'style_them');
// подключение стилей
add_action('wp_footer', 'script_them');
// подключение меню
add_action('after_setup_theme', 'menu');

// пример создание меню
function menu() {
  register_nav_menu('header', 'Главное меню в шапке');
  register_nav_menu('footer', 'Меню в подвале');
  // подключаем обложку поста
  add_theme_support( 'post-thumbnails', array('post', 'slider', 'services', 'logo', 'catalog', 'principles') );
  // удаляем ... в кратком описание постов
  add_filter('excerpt_more', function($more) {
    return '';
  });
}

// подключение стилей
function style_them() {
  // подключение основного файла стилей
  wp_enqueue_style('style', get_stylesheet_uri());
  // подключение остальный файлов
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css'); 
}

// подключение скриптов
function script_them() {
  wp_enqueue_script('script', get_template_directory_uri() . '/buildjs/index.js');

  // удаление из скриптов лишних аттрибутов
  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

// пример создания нового типа поста
add_action( 'init', 'register_post_types' );
function register_post_types(){
  register_post_type('slider', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Главный слайдер', // основное название для типа записи
      'singular_name'      => 'Слайдер', // название для одной записи этого типа
      'add_new'            => 'Добавить слайд', // для добавления новой записи
      'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
      'new_item'           => 'Новый слайд', // текст новой записи
      'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
      'search_items'       => 'Искать слайд', // для поиска по этим типам записи
      'not_found'          => 'Не найден слайд', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден слайд в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Главный слайдер', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 2,
    'menu_icon'           => 'dashicons-format-gallery',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('services', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Плитка услуги на Главной', // основное название для типа записи
      'singular_name'      => 'Плитка услуги', // название для одной записи этого типа
      'add_new'            => 'Добавить услугу', // для добавления новой записи
      'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
      'new_item'           => 'Новая услуга', // текст новой записи
      'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
      'search_items'       => 'Искать услугу', // для поиска по этим типам записи
      'not_found'          => 'Не найдена услуга', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдена услуга в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Плитка услуги на Главной', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 3,
    'menu_icon'           => 'dashicons-edit-large',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('logo', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'логотипы суббрендов', // основное название для типа записи
      'singular_name'      => 'логотипы суббрендов', // название для одной записи этого типа
      'add_new'            => 'Добавить лого', // для добавления новой записи
      'add_new_item'       => 'Добавление лого', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование лого', // для редактирования типа записи
      'new_item'           => 'Новое лого', // текст новой записи
      'view_item'          => 'Смотреть лого', // для просмотра записи этого типа.
      'search_items'       => 'Искать лого', // для поиска по этим типам записи
      'not_found'          => 'Не найденое лого', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найденое лого в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'логотипы суббрендов', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-images-alt',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('catalog', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Каталог(Услуги)', // основное название для типа записи
      'singular_name'      => 'Каталог(Услуги)', // название для одной записи этого типа
      'add_new'            => 'Добавить услугу', // для добавления новой записи
      'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
      'new_item'           => 'Новая услуга', // текст новой записи
      'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
      'search_items'       => 'Искать услугу', // для поиска по этим типам записи
      'not_found'          => 'Не найдена услуга', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдена услуга в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Каталог(Услуги)', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-book-alt',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('principles', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Принцыпи компании', // основное название для типа записи
      'singular_name'      => 'Принцыпи компании', // название для одной записи этого типа
      'add_new'            => 'Добавить принцып', // для добавления новой записи
      'add_new_item'       => 'Добавление принцыпа', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование принцыпа', // для редактирования типа записи
      'new_item'           => 'Новый принцып', // текст новой записи
      'view_item'          => 'Смотреть принцып', // для просмотра записи этого типа.
      'search_items'       => 'Искать принцып', // для поиска по этим типам записи
      'not_found'          => 'Не найден принцып', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден принцып в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Принцыпи компании', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 6,
    'menu_icon'           => 'dashicons-shield-alt',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

 
}

// скрипт для добавления svg картинок в адмнке
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );



