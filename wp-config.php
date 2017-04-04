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
define('DB_NAME', 'handy');

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
define('AUTH_KEY',         '?7A#h<5eBro];{^>Vy=wW2hdPL{%!~x+XG43WE[q_m{UNicr)iU>VPw_MixVW,Cd');
define('SECURE_AUTH_KEY',  'i$2I]Jyn>k0#:k7`%aNd=5N*Yr%>BxEF%GNqkav=ty|bSkAvy @{)u+%B)BMAU|g');
define('LOGGED_IN_KEY',    'P2fZdM$g(t2r9q1UDb;0qiX{otMrnrq+B.ADBb+Tl9Qn8zunFIq{l*U{,rZ6Eea_');
define('NONCE_KEY',        '?H{o->d[D}4$%kXV y&8kOx}Ziack-;}7?AR=<wdl|]7SLB?{/5jEx<ii^/5G964');
define('AUTH_SALT',        '_I~(v>d!rncw(N0W^57 gA{ftGM%+I#ATxtMLQcj;oMIN[t6/xFIn3v(~VlJ@^k9');
define('SECURE_AUTH_SALT', 's?7K7,@G5nm&ix{Ps 4tD}jgPG{kKm^&R@^o1XR7I|O4xpZ@..k-Z[N6F,iQhP2f');
define('LOGGED_IN_SALT',   '?d;^4OW5R^=`Odw#6gA6q4fos>`<+|/3*!;pdKfw.`lS)R[{+6kbtnf]jV^&>BMo');
define('NONCE_SALT',       '! .OO|;B5TU@8d<.p.i1SKs`?iuz/!wM>`D}+A~^*A,mSoB_;<1RaU!_3uOrH<lf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'handywp_';

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
