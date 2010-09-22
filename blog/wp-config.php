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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V-m|u]TwZ:K>fc(+Ot-5m>,%XdQ}T[mCPuxvuoNjkBFw`ZFi>tsWY|3T-)->j8.Y');
define('SECURE_AUTH_KEY',  'm1)EuSP,H1``GrFwaG|]*ewu9]rFXH,yY}36w]AX1u>&hE5dJH8W7twJiR(M lb+');
define('LOGGED_IN_KEY',    'Kj(4JIeZ~>!F,RIar1JG6-a~/I}&}D8ibWuG+s0Z|WwH3qVl4UD4v.@ml.}*v&]^');
define('NONCE_KEY',        '%bzf(`W!M=}X!/JTKhRJL;]u)*N s^VoQfL _2o?72rXevLqX:rA5) Bi_8fsk_)');
define('AUTH_SALT',        'tB*nwdMbDe[Mv+FhMF[*&Sudg7Wp$?H)7Bs;pE,Dr3]tNv1*A~QipXLC)l4UV+Gg');
define('SECURE_AUTH_SALT', 'fxe7Z7.sawX=xq?aU9{yIPVcU6VRPL-)_;D:YhEXngym ]l)-(0<n]%089`du_ud');
define('LOGGED_IN_SALT',   'YJ0fc~Sgd90;*c^r!C4{A[Z NA8#A_lro7x`!8S D)!{+%5F3znOnKSF=m?4A{Nn');
define('NONCE_SALT',       'g$AG^=Jp7;k6k 1~7uB/K.`D]4U$[zF|/B3k/)4SElcM}&@_[#Y}u/.Pue;$6j8}');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
