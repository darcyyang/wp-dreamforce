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
define('DB_NAME', 'wordpress');
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
define('AUTH_KEY',         'X`JMZ E|-fTPH>q6S.&>Zl.d}P5-:-4ApAq7GQ@bGbcq]D&JGh}n[JIt&r(T^+aO');
define('SECURE_AUTH_KEY',  'GNMh7N8G]f>#x#1nyTeXuN<9H6yuiR_fp%[wh*5l6EPr^8^udRSQ8{J>-zrxz,>/');
define('LOGGED_IN_KEY',    ']`$+NarH3-eUj[_|Vx`[/>2j%XBcqmKPdIT3TQy=xS#Q;@T&!L gyk{G*aB[.v$a');
define('NONCE_KEY',        'V6S4~yFdMyeb>`A+7Od-$]>s.Njt#V_);JxHOi:I,aY72~<3VR|TaYdcO@.8E00f');
define('AUTH_SALT',        'u0VgP]fn6_IvG/?KOl6$?l~%I.}*=9JGSIq!,v=Ggk3,<FH?q8_06oPL[D_5:ZV}');
define('SECURE_AUTH_SALT', ',I$ix/;TSRmQn*1k?JJDD|y0]t+#W@ZFd3e1ebj`kE<E/-abuPSi)Rg}pp!~K>|s');
define('LOGGED_IN_SALT',   'Y~~Ydw3)A7%d(-Sl1pj>[Mr[&v+E>a<,>)@#Fk<8>RKq3Vn?D*F,u3oDag,p(LB ');
define('NONCE_SALT',       '3ZB9-26$C.Q,Wlr@sh41tYJyIBjwJ~]UB&IK2FyQOpl:Sn]J8kbmf8R)m.&D9[T)');

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

define('WP_MEMORY_LIMIT', '10M');


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
