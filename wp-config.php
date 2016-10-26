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
define('DB_NAME', 'bbb_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '}wqNhkD~pr.Z(ylA&@*A 6/c#D.:880+ nL_b>xx9 q#`fVm+tUG{qg9rj.e]Dg^');
define('SECURE_AUTH_KEY',  'NxE9(5F-!{i?`$G wWGFjehD,*%M.M2YsW|n6{Ux^N7-u>#6W~u@:l[8ACSjJsx^');
define('LOGGED_IN_KEY',    '#+7/;6D/lvJuRu#N3wx]arJdlSIFkIyG}ybs,wr7ugmJO^(Yp|w1$aXHg)h7Rq`)');
define('NONCE_KEY',        '&UC{WGgyvJ!ri&dtzwBTUcx>`8p[#z[nx4vF<Sek<j!DO=9glE%atf[MR7@8> 65');
define('AUTH_SALT',        '>>l@;TalC2bLSGC(z}D 0Q4J3@j>e`nSdzBzdMJ9)jgcae]24C(j-Eopvbf@/G8~');
define('SECURE_AUTH_SALT', '%SRbk~GKdr8bzA.mwxe4f&p-S@s7{3$48CQ*BZ`cRwJ7Zpq3y]*a==n#bY9^/NbU');
define('LOGGED_IN_SALT',   'e};lD sY&{p:^nk1ZX}=t}J=@y2[?cO5Y<c!ob&a:Alic`K{?J:,R|9k$|e6pK@b');
define('NONCE_SALT',       '5r%xxTWIaT{84&IzOM4.sjEQF;)=VP7&saNexF8vGR^Ob3CC9Hfgpa}5Xqdss/e{');

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

