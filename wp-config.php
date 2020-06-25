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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-wp-psd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?O`>k8js*U6@_{{2 @^C>&>^Z0|xcnquF[$Qon;M`Fy)^hmRSg_gGH~+zL&Q^Q`*' );
define( 'SECURE_AUTH_KEY',  'xQ9cIse&TuAhzA0Z{F-/i8VC7/0e01%UF8YWRm?PQH7Gi.2Y7edH/.32^#<c.u$J' );
define( 'LOGGED_IN_KEY',    'M14L%0v8w5MXOT(MP:wGW7^(CD(46{jhRuL8:%Uxl.R%wbX^!T&{bcC]=%rMe-Xc' );
define( 'NONCE_KEY',        '~Vu<urGR~eW[Vi9.gFTp[p?@^bmnS0z~^;2gm;MTj&U/A<p?*}?<C+}`,[)~P)&f' );
define( 'AUTH_SALT',        '[d-x)p:4| knsN2dqp$sLE}:#dfz$hBsMw2fY/.AzP28y=>1`V3vI90L.H6x{3rS' );
define( 'SECURE_AUTH_SALT', 'v?4xc>jLr2QmG0v;W2Ea-]R&q nQ_`[{{7wyL,VvbSJtre=A]>QM~]9.,[(y>F;2' );
define( 'LOGGED_IN_SALT',   '71gVakt?8Mm^0ia6I=K#>KdWP-Ix3Ji>Oy_!`^NqPlKB~b8r]0feT?zau5(PbT1:' );
define( 'NONCE_SALT',       ',VH.h&^&nEUwXb[.z|utw%o84F+:MA=!D_=w&G<9+JZ&]JB.)?XRAr+H_6Z+2GNM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
