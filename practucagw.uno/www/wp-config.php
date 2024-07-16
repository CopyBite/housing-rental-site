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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bf549573_cv' );

/** Database username */
define( 'DB_USER', 'bf549573_cv' );

/** Database password */
define( 'DB_PASSWORD', '*5bf46!JAg' );

/** Database hostname */
define( 'DB_HOST', 'bf549573.mysql.tools' );

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
define( 'AUTH_KEY',         'sC_?U}&>M}>Kg/o_d[~Y0@HO<Pr:TM3j!=UQHiA7$Rsmm#.d!W8Q+^hXIJ()Df-Z' );
define( 'SECURE_AUTH_KEY',  'B>{Kn- ~Jp4kPEQ0kfL6Uu/CU(,7Zo9!iaNlNbCyVZcny SigQ_>W[y>!!BZGTBZ' );
define( 'LOGGED_IN_KEY',    '#JqR3icY2PwVB:lKy7@UViQ~emvj5y80s7p3s`%$y0!><nK*k@oi,a<2%PnIoLBE' );
define( 'NONCE_KEY',        '=-Ow6u@).fss^vDu]6MxD|[0*HV`QpHMCQHKR(mElVs,X^IvA6(~m{e7kTA.u+Q|' );
define( 'AUTH_SALT',        '_stJ)SHv5`ve%#$z*0l9 &o*3.xw51m&%(aQxQC<E_iP`yGXRx?]HFp+(ezx5qUV' );
define( 'SECURE_AUTH_SALT', 'LF~sTpt@udC/m3EV{Vkw: @oc8zvlTkJ AS**H;.xG;Ghaisk[A97hNMgM/ 2o`l' );
define( 'LOGGED_IN_SALT',   '06-3dz-Sd$B^lE_5qE|A-IB:Py2r2N(,Kcc]>dX12X[Vs34osOR{-m:1A U%k}<[' );
define( 'NONCE_SALT',       'JEg<GD9Tg@BZZFCZ2BvRLxQy)@@#qEz7z0AHV#]<m-lrU.%1gG:{xKy1i[xUDpp*' );

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
