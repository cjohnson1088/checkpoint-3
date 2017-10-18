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
define('DB_NAME', 'final_project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!.60-3ek0+@?xaU^_F<??g^r3l7Pq#m1 [hC*):w%@f!ca)YQ[([-2hP84kC#4qe');
define('SECURE_AUTH_KEY',  'jn0K}3cZ8;}i{)w>?s([3<*7)Wl>7bAStz43?F.btbhzkEX[WV KSolbF^9KyimJ');
define('LOGGED_IN_KEY',    '^NkT=[x/61Io7dRCn;MoSg|On!YZYAcP|+(ylp$.A%)AZr$Y`3Ts=`nOi2ok`g7R');
define('NONCE_KEY',        '*D}4ST@)RjPrFUp4T=~.2sE.n5LIKZmjq|?uCT8,QIkJ/AyLpi`<F%l<]eIUv[>t');
define('AUTH_SALT',        '$zI_dLe!V=RoD3)(5#_;j2Lq5-Cb>U]^9O!(-N|ysgjNEP5szZE}u5u745wBfT{w');
define('SECURE_AUTH_SALT', 'h5#o!F.;US--dKMBW|xA 8Trh7pgl#-kg^<$W[i77Ae[cPvjh/=af<G0!xoKjgFq');
define('LOGGED_IN_SALT',   'as<h,^dyKonx{->$Y;%@H+m}k6Xw(tRZ@d S8!{U(X|W4m:@iOoZ*$IeF[]rw8{%');
define('NONCE_SALT',       '+&Pw$mGUqv$/sZ*e=v&<9WIgxs/=@Gmr#MBtBQPQAe^eY8C+I r4~x399{{5;U|V');

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
