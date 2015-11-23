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
define('DB_NAME', 'mibs_wp');
#define('DB_NAME', 'azurwest');
/** MySQL database username */
define('DB_USER', 'mibs_dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'ackw5h.sT_l%');

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
define('AUTH_KEY',         'Al=eWB9c0%.q[a{{7xiCHva-/F){SvOV&LAl<}=l.r6>Zm*UFo7z~gL`?pzAjIXy');
define('SECURE_AUTH_KEY',  'Ia$ia6P5LlE8rFsc|j>RA3H+-xM<|=2;/17Q3{YLJubm@{_}_a*sb&YiJ2d%$F?L');
define('LOGGED_IN_KEY',    'J@C3h*hi7D;u*[r[[8Mi-muj|-|$XlW3g;@1Isr6YsBD}%M1{3J_a2}z}3zhV{+d');
define('NONCE_KEY',        'MCh|J@8!o3|)u}WpI%,@y;%|m.4*Yvq%/qI@ 5+_-@J_C l0hUhpx|9Cf~rf]8Zz');
define('AUTH_SALT',        'x8-aXu%x!fJ>%g0</VZ{+KU?[z]G>lN=r>k6O^Gqr!NnrnI1*AYR_.#3SUf)t|s5');
define('SECURE_AUTH_SALT', '5#b2 )s.:Vls^opk$UjtHGs=17O0M/.&zih=ga4&sd4o]%}Zd={UX~RE2p4v!n-U');
define('LOGGED_IN_SALT',   '%M=ZT$WYb>!yl9h2+ -qa+ lu1!n2#[|-6F uuX=t+O),82:LV=h2*3qqwn}a^r0');
define('NONCE_SALT',       '2|7Et<|o/adih.~1OS<&7{}-^_RP5|J$+5i_mrO]gU-{l@T1riSE(Q~KwB-pbd*+');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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