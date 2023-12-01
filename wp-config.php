<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finom.vn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Update  */
define('WP_MEMORY_LIMIT', '4096M');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e:>%yQI}uU!qWRR(F`F/[HD.GXI _Da`2e+?]KLZ<eyvB#d#8@DEuDT&4oT?(#ep' );
define( 'SECURE_AUTH_KEY',  'Nvp.HaVORw~^5@y5jc[G1/o}S>[24/mop!<IN<2 1CpOWiR%1+yvQ;$H<7Z-?^K{' );
define( 'LOGGED_IN_KEY',    '!P{%^dgO5S<~=Z9o7|!`_[z-qFwbj$;@vOaD<R:%;F,O<xe:}0^dx6wZ?aMDk:0B' );
define( 'NONCE_KEY',        't;lWyp4Tr05B[XG%X7j}[/45wc+LBQXC{~?Brn%C5M9ML($afY#BDjJ+ZY*NK8jA' );
define( 'AUTH_SALT',        'tTGAZ1fkljp[.Fbc4tD4*X1WAF 8~;JnhK@s4Q<SaQOJ>MD}*S1@H5!?r4E53EH<' );
define( 'SECURE_AUTH_SALT', 'Xc1A%/=&xKgUh=8,W34C#pYV+ic3`9l,{Nkc)_PW]hrwT_aVNg*RxBiYMNyx%xNL' );
define( 'LOGGED_IN_SALT',   'kH|Cqa5LskM?@(On(at e [kX/B0D/U~?>Ld8=,&_N9>fIDJKJ b;2h[]ABOa]C^' );
define( 'NONCE_SALT',       '6D8 *~kBE _U_TQW*uLP{xx$59KlY%h7^Q}xM7^;7U@`.$N+i:*Bg{GLz 9M*{Oq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'noithat_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
