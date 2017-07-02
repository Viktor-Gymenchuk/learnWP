<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2017
 * Time: 11:45
 */
//регистрируем скрипты и стили, начало
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/build/css/style.css' );

    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . '/bower_components/jquery/dist/jquery-1.12.4.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('slick', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.min.js', array('jquery') );
    wp_enqueue_script('inputmask', get_template_directory_uri() . '/build/js/jquery.inputmask.js', array('jquery') );
    wp_enqueue_script('main', get_template_directory_uri() . '/build/js/main.js', array('jquery') );
}
//регистрируем скрипты и стили, конец
//*************************************************************************************************************
//отключаем админ панель, начало
show_admin_bar(false);

if (!current_user_can('administrator')):
    add_filter('show_admin_bar', '__return_false'); // отключить
endif;
//отключаем админ панель, конец
//*************************************************************************************************************
// регистрируем меню, начало
register_nav_menus(array(
    'primary' => __('Primary Menu', 'yadss'),
    'cereals' => __('Cereals Menu', 'yadss'),
    'seeds_beets' => __('Seeds beets Menu', 'yadss'),
    'legumes' => __('Legumes Menu', 'yadss'),
    'industrial_crops' => __('Industrial crops Menu', 'yadss'),
    'seeds_clover' => __('Seeds of clover Menu', 'yadss'),
));
// регистрируем меню, конец
//*************************************************************************************************************
add_theme_support( 'post-thumbnails' ); // включаем поддрежку миниатюр для всех типов постов
//*************************************************************************************************************
//создание маски телефона, начало
add_action('wp_footer', 'wpmidia_activate_masked_input');
function wpmidia_activate_masked_input(){
    ?>
    <script type="text/javascript">
        jQuery( function($){
            $(".wpcf7-tel").mask("+38(099)999-99-99");
        });
    </script>
    <?php
}
//создание маски телефона, конец
//*************************************************************************************************************
/**
 * Добавляет страницу настройки темы в админку Вордпресса начало
 */
// ------------------------------------------------------------------
// Вешаем все блоки, поля и опции на хук admin_init
// ------------------------------------------------------------------
//
add_action( 'admin_init', 'eg_settings_api_init' );
function eg_settings_api_init() {
    // Добавляем блок опций на базовую страницу "Общие"
    add_settings_section(
        'eg_setting_section', // секция
        'Контактные данные',
        'eg_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код поля опции.
    add_settings_field(
        'eg_address',
        'Физический адресс',
        'eg_setting_address', // можно указать ''
        'general', // страница
        'eg_setting_section' // секция
    );
    add_settings_field(
        'eg_address2',
        'Физический адресс2',
        'eg_setting_address2', // можно указать ''
        'general', // страница
        'eg_setting_section' // секция
    );
    add_settings_field(
        'eg_phone',
        'Телефон',
        'eg_setting_phone',
        'general', // страница
        'eg_setting_section' // секция
    );
    add_settings_field(
        'eg_phone2',
        'Телефон2',
        'eg_setting_phone2',
        'general', // страница
        'eg_setting_section' // секция
    );

    // Регистрируем опции, чтобы они сохранялись при отправке
    // $_POST параметров и чтобы callback функции опций выводили их значение.
    register_setting( 'general', 'eg_address' );
    register_setting( 'general', 'eg_address2' );
    register_setting( 'general', 'eg_phone' );
    register_setting( 'general', 'eg_phone2' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить
// никакой текст или делать что-то еще до того как выводить опции,
// то функцию можно не использовать для этого укажите '' в третьем
// параметре add_settings_section
//
function eg_setting_section_callback_function() {
    //echo '<p>Текст описывающий блок настроек</p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем checkbox и text input теги
//
function eg_setting_address() {
    echo '<input 
		name="eg_address"  
		type="text" 
		size="100" 
		value="' . get_option( 'eg_address' ) . '" 
		class="eg_address qtranxs-translatable"
	 />';
}
function eg_setting_address2() {
    echo '<input 
		name="eg_address2"  
		type="text" 
		size="140" 
		value="' . get_option( 'eg_address2' ) . '" 
		class="eg_address qtranxs-translatable"
	 />';
}
function eg_setting_phone() {
    echo '<input 
		name="eg_phone"  
		type="tel" 
		value="' . get_option( 'eg_phone' ) . '" 
		class="code2"
	 />';
}
function eg_setting_phone2() {
    echo '<input 
		name="eg_phone2"  
		type="tel" 
		value="' . get_option( 'eg_phone2' ) . '" 
		class="code2"
	 />';
}
/**
 * Добавляет страницу настройки темы в админку Вордпресса конец
 */
//*************************************************************************************************************
