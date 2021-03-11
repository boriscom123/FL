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
define( 'DB_NAME', 'orgtehcent_eco' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'orgtehcent_eco' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'NJ/A1fbv' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'orgtehcent.mysql' );

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
define( 'AUTH_KEY',         'x<`FzMM5Uj*n4kuqR>x9oPLc$?Zsp-9=3&ft<wE`,mPF9u.P,KUR-AQfp^9}xr!z' );
define( 'SECURE_AUTH_KEY',  'oA^WlDb8#tjM.z#9YA7W;d=OH|s#X./o>e1>)a#a[:E!,qm%>~C?aCkT7USSI_I4' );
define( 'LOGGED_IN_KEY',    'vyF^;|mPlTz9 (V;M*{J#ut;IZta~A@d3/)pP;7f(FPioV8f#N`D`4L[?gmi8d)C' );
define( 'NONCE_KEY',        '$a$0Yq|-GuIAxivVqz>N;rPlA^@D$:{K_6:zJ^tEP}mGR43pfo/C(O.SG{-xU>Kq' );
define( 'AUTH_SALT',        'J[.I:?w_>?lieU2/EYfj+#]Xau>C~zFrfZ2A5fAKV]GN$,2;*M?Gby(OG(8ze{[V' );
define( 'SECURE_AUTH_SALT', 'Z=M3<|41?+&{g``!q:p?J=R`Ht!0UOL>(I=Y]& UUx!.NpC`__;._g&>]C(AJoB0' );
define( 'LOGGED_IN_SALT',   ',_+U/./S!cd OpY16e3E)KEt=s.lUhP!yk,%O<R!F?;|q,+(JFNDo=6HrmiOY`Ao' );
define( 'NONCE_SALT',       'V~4w!x<@fH3Yj{ghn{GURBNj3<`CZUX;&tD~_.mLxz7QO)>*^6j q?p[`yszXXGQ' );
define('WPCF7_AUTOP', false );
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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
