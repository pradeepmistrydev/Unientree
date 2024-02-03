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
define( 'DB_NAME', 'unientree_education' );

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
define( 'AUTH_KEY',         'Z4MH!o).>!&k:%VIsa9e;[m;YdUb#Y<h 5+ofk.DBh5j*K,=_RvL+A;LEHQ7B1;%' );
define( 'SECURE_AUTH_KEY',  '++}?Y Nc&!x/Q#;pn84Z*@S|I1bns{`{d,JTEMb0(Dx- K+^1.>:i>cGAF.F,is7' );
define( 'LOGGED_IN_KEY',    'UAj`Z!Z8)jR~2r2fonx{!Nnc>J<XcZzEAZsNck)CG`8UE|Ol35N[r.rZbl1$ewUN' );
define( 'NONCE_KEY',        '11{%7%h;.+GXdihq0KP=RXn }w.tCXiNL_^hX<s3wgXS5o+C;n;1L$9`txG:Wz+.' );
define( 'AUTH_SALT',        '9^wOAmI-VG.xmw%SfTIy$kSq0,cT8 f-7T8|*!BSV^}uYc%8pRqODl0<,@-):2VD' );
define( 'SECURE_AUTH_SALT', '`cuAAUv@l62DtZ|ZTB^OFif>tI2rf:uJ1|15{,:hqD_vJM]$2U$!oO_@k1zuDH|T' );
define( 'LOGGED_IN_SALT',   ' z-?VDq)I?q!pHw$rlksKOmkM{22@vl3,*>RC%xJ($o8>Fk%N)j:h0GKyW-4NY9S' );
define( 'NONCE_SALT',       '277W37T5)/JGxU: )d5e,_I#{E%Z6M3BXlIe,J!}GKKK-Of 2M7X4Cl>#Us,KDRx' );

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
