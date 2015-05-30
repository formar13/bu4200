<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gabrifi8_BU4200');

/** MySQL database username */
define('DB_USER', 'gabrifi8_bu4200');

/** MySQL database password */
define('DB_PASSWORD', 'Rullgardin1');

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
define('AUTH_KEY',         '2P&XN_gfh(viRtPXA&4ln>O0yqU=Y:s#NRg^9.H0=/zE*!:;b!74jv9&&J*a]KTK');
define('SECURE_AUTH_KEY',  '.q>C>a|O|K-sd``Yp3o@v/-vgF6v@[5t.k}m=SpEhp,{F#1@+z|aIiuz!KpF5`d0');
define('LOGGED_IN_KEY',    'Pdhty&(I-6352*$2tf)#HV`50wet^~bDI^tQhp-&ui^<Z@>Qp{S`@Upf8XeWTJ19');
define('NONCE_KEY',        '@z nhz3-!9]o[T~]pNA|JT*V:0P_N-saBqUfz-Qj`ZTutsL$P_PMy*5IJU:*>Qt=');
define('AUTH_SALT',        'GFKVAk|ukW/^F5}]A2+Uj@pw=Q|j~Z)u-{4o6w<cn@ jo @Uw9fb1H)S/ig!{N ^');
define('SECURE_AUTH_SALT', '%4R#8og;V:6qu(Xl)uK_6J=(cWZmuZQ->uj{3V$H~R]B+rLEW[G,Fe&io!5p<[}y');
define('LOGGED_IN_SALT',   '5g;bH)+y`|*F+Vysb[voZe$FEl2~X`Hc-{#e2|*2 =E:GiTA2<gFrxZycCn&)l%x');
define('NONCE_SALT',       'LY:kuQ{S3qBgqxaU3VQPDG^aBkOsfPz&Li&*.4tHCR&oG;<<>n{+nyygH_+=o]r:');

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
