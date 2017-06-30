<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'my_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')&ZSUE1g 9iA5a%8^4sZS~p ue+SnUG&4_d)HohoblG3XLCG(V(=0Dv T$Vw*ka#');
define('SECURE_AUTH_KEY',  '#I;K%m?jqV9LFs2m%x=4q)nx;NrD0B1-)RfLigo/jd8~[Q4LePAh^ir?$4{`Z~M|');
define('LOGGED_IN_KEY',    'ZjD6xS$QZUU~Q6OSx6c>1aH$WUP6nOSp_Bw%j@eWD,JvuS~hQfQ}H|BAr47=rL3T');
define('NONCE_KEY',        'Fe;jZz_`n;sZ4Hy{e{3Q^x`BJH]LZ`v0(a c*@59!=Ca{O]&3kPy[WcwO<V0,Vb^');
define('AUTH_SALT',        '7&CvTwCOHt#v[096;,#h6LGiu4;XttQT3n8/ N?!~=rTX.b4$jDwjW,l+|,QomSk');
define('SECURE_AUTH_SALT', ':J9sPQ2rwabI_[_CStRY9!{1o1 Wp[EAQT]KF|8XLzHG 2/L.Qx`^>1g$cuw8-c}');
define('LOGGED_IN_SALT',   '>6W+93*+eE}]2jq7fgL89?m8k>CXS 5l@hsktGH ^hHi1q$y0MSpoZKmk~Vqq?cl');
define('NONCE_SALT',       '.`ti[`9TuT]Qh@(~ooap)O]l6LrX6?ypWNednP&EvbQ_t-{y1s_!Fo1>u.&$+00|');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'my_wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
