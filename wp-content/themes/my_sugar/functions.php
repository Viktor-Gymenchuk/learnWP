<?php

//подключение стилей и скриптов

add_action('wp_enqueue_scripts', 'my_script');
function my_script() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/build/css/style.css');
}


//регистрация пользовательского типа записи
add_action('init', 'my_salo');
function my_salo()
{
    $args = array(
        'labels' => array('Salo',
            'name' => 'salo',
            'singular_name' => 'Salo'
        ),
        'public' => true,
        'has_arhive' => true,
        'taxonomies' => array('category'),
        'rewrite' => array('slig' => 'product'),
        'suppurts' => array('title', 'editor', 'author', 'thumbnail', 'comment', 'custom-fields')
    );
    register_post_type('salo', $args);
}

add_post_meta(420, 'prowp_price', '34.99', true);


//добавляем пользовательскую такосономию
add_action('init', 'prowp_define_product_type_taxonomy');
function prowp_define_product_type_taxonomy()
{
    register_taxonomy(
        'type', // определение в db
        'salo', // тип обекта (products)
        array(
            'hierarchical' => true, //будет ли вложеность таксономий
            'label' => 'BigSalo', //название вадминке
            'query_var' => true, // принимает запрашиваемые переменные из из url
            'rewrite' => true //красивые ссылки
        ));
}

;


//добавляем таксономию срок хранения
add_action('init', 'time_save');
function time_save()
{
    $label = array(
        'name' => 'Time_save',
        'singular_name' => 'Time_save',
        'search_items' => 'Search Time_save',
        'all_items' => 'All Time_save',
        'parent_item' => 'Parent Time_save',
        'parent_item_colon' => 'Parent Time_save:',
        'edit_item' => 'Edit Time_save',
        'update_item' => 'Update Time_save',
        'add_new_item' => 'New Time_save Name',
        'namu_name' => 'Time_save'
    );
    $args = array(
        'labels' => $label,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true
    );
    register_taxonomy('type', 'salo', $args);
}