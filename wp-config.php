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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'uT}k*Qs(e%F3f%*ZntJEv}=fYz2+4f^=B!G(1BYD/OsFE# 2vmq+A]<+[ye;f>qj' );
define( 'SECURE_AUTH_KEY',  '~xVX3nQ3,|)qK:~:`H)r`k|umEVk%XS@tJW};3$ej%S0`j5/s,^d}WKn]oY=7`</' );
define( 'LOGGED_IN_KEY',    '3eQ-ug[2SI)l{=:mpC2Qn6w}4x.jxK+{`JGSqMt+v}/m#sOaZyg3_}9tvy(0j5(K' );
define( 'NONCE_KEY',        'u<R4}O<XG/A5Qyp#|VPr#1|Y-Q1U)>ZltycYyy=+Nv{&UcCEcfSio-6*nD+1tSX0' );
define( 'AUTH_SALT',        'Qz*;fn |aa)$?;95Yl!,NQ(%in_mp!h{SDku#Ck6t#gf<4rS.E}`~2c^CK+PyqEr' );
define( 'SECURE_AUTH_SALT', 'Q~ECB?*[}+,NkhzkQj;UEIn!B if%c SrIdZ=K@OUk1peA}B |=Vm^y0i[ yRD,6' );
define( 'LOGGED_IN_SALT',   'ky_tMM9V.wM;Y-!LqFhm@yT%k*X:SW-:G{b][4U47L3XDIF1fH+N*uj+`!j3J]=P' );
define( 'NONCE_SALT',       '2`|l92GDraC#~b:6[G-./m?TtNF:ugKDubQ^,KlQX57@Q1V!P?C/D:l]h728GmH ' );

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
