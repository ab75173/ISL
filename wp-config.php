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
define('DB_NAME', 'isl');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'welcome1');

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
define('AUTH_KEY',         '@4XCpUM#pC!/A]l^XC@niBh5QCN?Uwlofh_xl-{n@+Rws2N1fO?-/5S|71p?1uKJ');
define('SECURE_AUTH_KEY',  'UVGkZC`$_NSr.RI|Rj4WC3`ARX{h|8&&]X4)YPpgO-h  v3VQWsmc`i*~YaDgf#W');
define('LOGGED_IN_KEY',    'Ru}T9&> 8PDr8$v:v-9OG~<(C0rY-hGn_B#q<2[a##mg6G-L9H++L`>V-Qn+$aq+');
define('NONCE_KEY',        'L&M-XS<#usySd6>-bjsz10OPq+y`h#2+W).ra3Q8?E$?t7f:ZHt_/FQ$9 S~3d=y');
define('AUTH_SALT',        'MF}|Q_lb#IT~Ocr4=c9-5k9Sej_?y4L(|Cp>h4x0l8WRD77<)yY_JIf,o:./:|~/');
define('SECURE_AUTH_SALT', 'R+#AsxNn0&K*_>ox`pp>.y?)B/hF]HG|;hc?|ucxi)_Db,2{y#UDuD5Axw$=4&8f');
define('LOGGED_IN_SALT',   'L)<I[za;$Q$.`})8dD~nTARi2]$nNP]ifGdR+)FX8w*YQC8CktWW,f-slv x_<HL');
define('NONCE_SALT',       '-Ru-K?)^X-KoxKF^S3pA71Y%sp}*} [gAh]@xl+g$x~^nky&N^T]F&h_b]LXQ-2.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpisl_';

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
