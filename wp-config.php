<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'code');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JcBpzU2D!(W1}0W2duXx<hoGG;k`U@uf%xMq/*&Rr|{;0cd(Sn-{>2&;_c=*by)?');
define('SECURE_AUTH_KEY',  'uzvok_/%U9 vz|LA{UzurPxoHK0Qd77{|Wb #Rwf&a8/SR]fxH!-jd=E4?8=LT]V');
define('LOGGED_IN_KEY',    'zD8mEY3arcOm#*qo#_!?Y@7{Y]cS$J6S%1Yu1&$h:g~&TR}`vYsH<U?$q5(8.K`I');
define('NONCE_KEY',        'XzqzAn8{&Sm8Ikp`^MkZ e.3?0[Zn@>t28OLmTr(DIJ}HvZpoSQnxL}7|b@7gV4T');
define('AUTH_SALT',        'wOQi%t&<d+#j:]o6&4K1L/Z8~1nk[l{$k4iCg|y2OzyI~S!/pZfgDoekHFQu{<>|');
define('SECURE_AUTH_SALT', '&1?:jMtjnFF::MK]7zBz.JNtc2<oA>;<}XU$Hz<A|m(g59z8a+P5z@wgsE`T|&mV');
define('LOGGED_IN_SALT',   'YOm9`K0Mt_$Qi Wkg+Xyy 6|j3z1Da,GV(?]qjmC?t.r)Xvc<}l]/9xY0PCkkM~7');
define('NONCE_SALT',       '(cqsfP72rk,KEUZ(#=B]TSf(6}c$ZM&2>3v7A)jXwj)Dk{`t&~WTyx,d-Z>$*D!w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
