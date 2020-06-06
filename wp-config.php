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
define( 'DB_NAME', 'newlakshmikanth' );

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
define( 'AUTH_KEY',         '&[RYDQUPVK*L(UCzHvW0;j$VTonnJrPN266a9w9[[k0|1pJMtPgKneK!d2eI8e3Q' );
define( 'SECURE_AUTH_KEY',  '0+<>.EkjALbma(yB^@+2IB6RV9a?{4,NoOnX_um#t]|H!apwL`n(tpd<`!j2>O`x' );
define( 'LOGGED_IN_KEY',    'zho$^XKJDd&`Uo)V5>KL=nYCxd9O=T^D[R<#xy(eRF?#I<; _F?P#iz{B<q.SgG#' );
define( 'NONCE_KEY',        'X85Q}$U?kzx3n$y/*`+wX0sg2(Bh?$HoJ/WC/dnN$309&-O2T.jt/XD%%]374g<*' );
define( 'AUTH_SALT',        'ACT0YWdZ?=S]m3RL&fc3yi`,& dZ}]@RA{@+03q[tMKbrR6,JlnZz_(fb^:9w9T1' );
define( 'SECURE_AUTH_SALT', '|u(ZeW>X o/hC!ER9RVpR<6hHNKC%IJVloDl8!iBpl{fAbLD8{QJk0*SWTa}y 0^' );
define( 'LOGGED_IN_SALT',   '[TZMezPc,}ok<I9_p@:-A C#@P~&uVgD9q@:Ww]] zT0|C7V[8:{+c0P6yMP#A) ' );
define( 'NONCE_SALT',       '}dV:HJk}NkVj2Y;Y5>S.L#QK*ec[6gi!+6/4n_Y7R9i!g-DN0AaI4iL0ax+b2oba' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_new';

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
