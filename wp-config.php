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
define( 'DB_NAME', 'market' );

/** MySQL database username */
define( 'DB_USER', 'nkwanta442' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '>Bj:/s0+9}yp#wJcWumqu$s+3dH4Md1E8[a#T yEMfcz!>1?(e;zn7`.+1?-T@tH' );
define( 'SECURE_AUTH_KEY',  'P^#]|E:}hFE`sgRJ@jAgm0Qy2p;gv!sS!s7d9}>_7#XS[}S-ti]}PLrgS}hA;6W2' );
define( 'LOGGED_IN_KEY',    ']O#eM/2$$XCsU6 /pbo52w^kmH>0ex*bv8Xb 08JqU8>ORDU Tcv%sfIP]p22Ugr' );
define( 'NONCE_KEY',        'H:X!BF]J3J>IQ#I_4&+|.rN,/Vho<SA=z}0!s(+u/gEP+7`@YN!iBD sB6M/}?@6' );
define( 'AUTH_SALT',        '}CAsgUQwoGK;1xM(F`.FZ|moC}P<c+{X1G)P)[ ljvO 5ru%1f:(reNnNBP:=kNC' );
define( 'SECURE_AUTH_SALT', '-QgJo~@DRaAqOUwAONLTSXhPgz3]eCJzH2:>Z@GY$x_T}%T.$h:hWINz_~&OV%[b' );
define( 'LOGGED_IN_SALT',   '^W-o&Kb1Z7Tb/S*Rc7Ro3Q.!4Y }{A)SCHA?PP{k_uqLqy!a9RMb4ts]^4VFPjPL' );
define( 'NONCE_SALT',       '4v/mGt(,-`bVV)Psg2<WN!}25o0lsIgI!|?$?NVLqN#/yw-j,33cwkNx-nx<27,~' );

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
