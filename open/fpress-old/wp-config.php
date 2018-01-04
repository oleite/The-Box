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
define('DB_NAME', 'gearc172_fpress');

/** MySQL database username */
define('DB_USER', 'gearc172_oliver');

/** MySQL database password */
define('DB_PASSWORD', 'Spiele0202@932_gc');

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
define('AUTH_KEY',         '?TN<XXrqil6oNa~mOEHPDB$3nJuSt*cvOXLf5ucK_O2rOgI(YLfNtO7il2<tvY^3');
define('SECURE_AUTH_KEY',  '=|E?R$T?U^Qk45~li1t<`+?4Ni/l6;)(&C>i|gT7F f_v`RkL`HBfmunj<1{;Wm=');
define('LOGGED_IN_KEY',    'n.7whbl)Avp%`v3Ztx?ockTxA;~)%5C)9zKZ|(XxcsUHTQ=p&wtwN`izt<biXrmh');
define('NONCE_KEY',        ')J}*zo**Ake;DAH,t2Jfv7n`y*3Co3>j6f$`n^8WUh[Ob-1dES bOj@Yw*,>(+be');
define('AUTH_SALT',        'GGl5!e )<77&&r#a=NPU,KPf$!TwI^|sk.A%4#a2W WMWEMNt0Zw8G)kdKFjWHc)');
define('SECURE_AUTH_SALT', 'ZB&qr ~KW%C5{[@,?3T#Kvw3P*zEKFT?T&gztjW=V~@DB!v):DZ0;!i|CXhKynCl');
define('LOGGED_IN_SALT',   'MsX}};B5m*<;F}gk;7(Tq_tmht;lSXnC,J&q.6/eb0;6|!.D}=o#g(axub4BJGRX');
define('NONCE_SALT',       'gVrfyB 1n)$kqL#;j3u[wYX[.fedPuib-oJ?bi:7T((6pR.pZQNl8w=K(wR;#|fL');

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
