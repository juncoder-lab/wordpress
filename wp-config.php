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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp-admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1qa2ws3ed' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WW6)?`l$?&KEY(@=J85ra_4RC>ik|}sF/#f}fjQ).b7}cP@zz>V[!Gx]+jX6uC}s' );
define( 'SECURE_AUTH_KEY',  '{i/D;VZ-YwM$^/mEZ$M$>PtO6JIvGd9Fg[SgF_}/^a8>gU?qh]r,9(5nvc1%BvYH' );
define( 'LOGGED_IN_KEY',    'mbn,|.O%+Ht[PV$:@1N!ywUm6&*_LA(N1m1ke/puLCXjnylMAh2.-vCUHR&jsT6`' );
define( 'NONCE_KEY',        'qGvK|sep){v(SlL&kMP{Z#u=|=-/%bljnUk8#Tv/mEpR>vX.T_(e(fK}}T4(+!Sz' );
define( 'AUTH_SALT',        'A%VFz]?Nk(P5m8nn]U)Nj4MdIGqz;z._`U?B[=5o9C6_,HXz_b2(P%i2amd>7GZ;' );
define( 'SECURE_AUTH_SALT', '0[b7?B5s$iyc#(,e-j mAo wP$MRT|+g`mI8Xe*qwV/18f@X5N{Y 7E]&`$@7.Nq' );
define( 'LOGGED_IN_SALT',   '`$@jL#d#Ie4CMG[u]{<?7+U5p&`,Q*+0,-oEj/L6qbuZ :>gFybcnY(*TyU=dyYo' );
define( 'NONCE_SALT',       'eDeS3^f:LJ?O[bb6DUta/6iz09hnas+Y|+tV3EE^}MRA,2}M<,NTY~I3xdV[h({L' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
