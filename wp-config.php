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
define('DB_NAME', 'templates');

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
define('AUTH_KEY',         '=H~B)61V(R[EJqZn7Vde$9pl7OVIYhB0t18b>Fsa1aqH^h=N)P 9QN|9q?MdMKp|');
define('SECURE_AUTH_KEY',  '9=;k@|qyZ3g>s?{UZ@a9QD|zEd3[rD*9B)0}mjyUpw26<?=6Qo./?:UL138`SmM]');
define('LOGGED_IN_KEY',    'An90p6,e=-<1V5U8NAQgu7d+Z_Br^*ZzgWwgjr[ pEYHC/QAy9g3_!qr)s<3/|yP');
define('NONCE_KEY',        'reW$W9|o<7(k_,7J}8Qk0pok7#.ES#ol75&nF1:[IOO{K)y[v!RLYMk~F6Um)s_P');
define('AUTH_SALT',        'vpeldP7sSV&v`[}pe$=/hIom4AB MC=tQ^ND]k.Zw7ZPl@L0tg*(~(-CMuQ>vY7m');
define('SECURE_AUTH_SALT', ' ]I}|Jgh{G;1o14F=ymDj2xSIv25-?aM!<?;h3-pXBw04;o|T5kS_IL<w<0RKiak');
define('LOGGED_IN_SALT',   '`mm$pbqzCYFYnX7djY][gK3yTx)qW_%%>:7=q,O0DL*gctk]7Z.%A(p|tU(a8VAR');
define('NONCE_SALT',       '0WJ0D`m$niWw[P?c`P75fB NCJ{m_+GG{lSab724NWa&fE1J;Yt>:?s~SxKQN/$W');

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
