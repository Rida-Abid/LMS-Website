<?php
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
define( 'DB_NAME', 'LMS' );

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
define( 'AUTH_KEY',         'YN@CA3DryTO*pWL:o&HG?/,^}{,<pxvU[UoJ;Fd<P6J~~-JA}##xd5rD/f9|4O! ' );
define( 'SECURE_AUTH_KEY',  'u]^X^&wqAh9Rdz0_}c5@hMP:h(%UD8fUPZxsz>KrhMM/,QE,;wAemT$;:>aQty`&' );
define( 'LOGGED_IN_KEY',    'a*|fZ;P=!*p`L8s(iT0]+`oZP8bC.PJ+m9r_SW-Rn9BAegd*cq~Bh1MrlU7<g-RG' );
define( 'NONCE_KEY',        '#&w/jXe*9,2H<[SXiJQ?##1MU8mxg:./88M;{3*tbNki?u:?:M1RX4r(Vz7*~zfp' );
define( 'AUTH_SALT',        'm?inI{?&}}$a(%/nPZXj(Hr(@XA{-/TDGk+c,95sfr0%Tb7>v4>IiV7X#,aa=Qow' );
define( 'SECURE_AUTH_SALT', '/Pud3p#W*ywUdq=m.;j`RXy7oqWmuBzb62J_s_a?G?ZGp])wr|BGAIz 3u~% to+' );
define( 'LOGGED_IN_SALT',   '&|X^Gw2B3Ns[:hw15:ksPr$fC_2_U/A<vU5U0P94>W{m?DHhaz%c2M#Z+V/I(ku0' );
define( 'NONCE_SALT',       '&1WO[grkP[[1n]J>6Uk^.hrY#Q1}4Trr44`c_~.>4d!g0S+8F4!u.5 -hkbT3|b1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
