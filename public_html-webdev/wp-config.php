<?php

define('FORCE_SSL_ADMIN', true);

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
define('DB_NAME', 'telnetndb');

/** MySQL database username */
define('DB_USER', 'telnetndb');

/** MySQL database password */
define('DB_PASSWORD', 'AnkaboutNDB1394!');

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
define('AUTH_KEY',         'z0JcX@LCy=ozDS&P5M;>vFr>1/fZD Ybd`QwN>X-6vV^HbZ:ilD}&n)mD+6;69Z0');
define('SECURE_AUTH_KEY',  '>@Vzu4)dYGG`Y^SJ }8 xs*APSCcGW5gqKH7/EM*oSmXDCM9rt!T17?7<nA_Z76<');
define('LOGGED_IN_KEY',    'jD rJK-_,>&YJm+~e6wC^r(v*<M.feD$i/ww!dx23?@XFB#7V1Hf^O|ri0PW2tq}');
define('NONCE_KEY',        '#Yy5qKICkQT/524ygr@{-.PPsSW2C%k[y$Q/K=?wk$ni=bME0d<1^DV!n3H./-]x');
define('AUTH_SALT',        'v{)~#6wHpxh2fZ35g)mKqak2#jPhLH:Poi_D]?1$qAG0H-mFYi]Y)ph64ah(P_Pu');
define('SECURE_AUTH_SALT', 'oEeUO~C@xtDZ5/jYNDn{7:YvV9+`|S7ht/wuK(GE8i|xtI8.COa9QJx~;tE)BSx^');
define('LOGGED_IN_SALT',   '>DV]ho8*BU!agUK,& !1${5#JZb}+s:9> u{_IL}N-N@2wC?|N+!62*y{B9Eo_,3');
define('NONCE_SALT',       'Me.o9HiOT{Yvr9*F~&BhgdeD}(t;.=-oi7elhDW)/mV(gw=7O8_l?t,7+$#j7?t7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'txpsgwp_';

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

define('WP_HOME','https://webdev.telnet-inc.com'); 
define('WP_SITEURL','https://webdev.telnet-inc.com');

