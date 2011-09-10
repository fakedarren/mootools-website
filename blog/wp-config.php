<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ApUCCs25IdKLaJMhd;$x?z27T}PpIqQs5H$sLFnk2YZqMhLe<JB0O6iD?c4 nh<a');
define('SECURE_AUTH_KEY',  '}o&xD ).C.h-~u?]19LF <0l+1ppvkXHJcg}k*Q{XuN!C8Ct/?4F7bPIJ^B)U0]}');
define('LOGGED_IN_KEY',    'BFUtl;d G;!w2;T-_Kvx[-F^b|]IV?n`JIXm/5kH93wnJU9@Z5Fdx])*@*YH&K&&');
define('NONCE_KEY',        '<DZ%k.v`220)9mS]k21Y>&<G?d9BD?Jedht}VvkEoT08oQT/<3]_jB3dr9tXj)L7');
define('AUTH_SALT',        '(^CS[?B.c@$0XfV-C^%TbI%#Iup_,U+Mn3#Fh8C$_J61!Q24>uQ1unmDab&Kys<,');
define('SECURE_AUTH_SALT', '&K_ma_D+HeefQbS&TEhZCiK!S]ZTDi,$$Ku<G^kaGIC+GSM&s}:R/UMi{>Lh8&8m');
define('LOGGED_IN_SALT',   '%o?$nEZtoEO-F`g[/[#tmMvXa^Fwmn<Y-M1u%7uG&t#OB2[i99v;Hz,1zXi`MW1~');
define('NONCE_SALT',       'GSNeg0qpbh;#.l3%,[<TIHg8d4+;!5ND)m{L~8xGHv(%OU~9,0Dpc).h;+=u(%rZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
