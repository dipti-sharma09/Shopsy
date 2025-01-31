<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopsy' );

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
define( 'AUTH_KEY',         '4l=M]3DvE7}U3xs1NwnFX)wx#;$]4c`1WchuvsNV=0]$ejM-c{q>DWN=98}A63,9' );
define( 'SECURE_AUTH_KEY',  'TX0>r9Hi_!qMMG$hkSx]$3sP9hSltC[E.Z5xI?dFpJU{`|(QLqaT$4Hw&;Sm}aDB' );
define( 'LOGGED_IN_KEY',    '7xu[A3kT)Nq`!.p:I=L;V;:h>k$xjI+QY.!g^lK5)?:bLxS!U~W$.0^Z}Vr;LwyR' );
define( 'NONCE_KEY',        '^#y8|$0kq=YxFwXey0{q+*4`_bcobg5^8?7x:2v0hgxMB+A;l`xH[MFQ)&07K OA' );
define( 'AUTH_SALT',        'OWXI7_??4J+xv2`T}Argyz3b$bG}*{:/XaY,Im0v0yVIQrf7Idft1pE8$~5C4G&U' );
define( 'SECURE_AUTH_SALT', '!vBWNilh<! /2Dh6ZYG7|Iw[Zi %2~Re8brT-9$<b3;/ xey`Gk-/ZX;7fy$Ug0S' );
define( 'LOGGED_IN_SALT',   '~,UEBxE]wv Xt_qD/L?F?! sQtD,{e*?@jhd|G%<#xcm10YYGH/Z|?<$RA+[k8S ' );
define( 'NONCE_SALT',       'LjBq*A)m5u)f.>o3LdsveE]c:/euShJqV 4OVj5CO|mseBvZn)]X.~=JBvOu-c$$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_shopsy';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
