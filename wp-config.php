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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`FV835U:jx;Pth)}P=n~$j`Ny;FBD+/XDY*Y(io1`v8|n Y7q8F1qiV$,xswuWhD' );
define( 'SECURE_AUTH_KEY',  '=@M2vz1.`U90vyoRze{QJ`AzHWy+RO+L*tl~Soqi_q!KZ yey<LT6O}tcV8_=+Xb' );
define( 'LOGGED_IN_KEY',    'la%J8y0,4o44~CHxAR?FYZA[T_:;5+&QbF[~|v8S!58|t::%*GEa),;V6y4 lYLZ' );
define( 'NONCE_KEY',        'Gx veX gK*1-pXZM!cP]Z|_6GcNud(4P$kk-5bhj;>7#c*(P)7`J!9v~*x8IM.`,' );
define( 'AUTH_SALT',        ';lKCaJXm3`swUQ=wB3U^3a8a@#{v!]|iuuHz`e)b{?_]}}Rihqt8PQ-915 [Q)fZ' );
define( 'SECURE_AUTH_SALT', '(boS!>qmaX`n*IawnDU]tkk):1D;cSI+n)QKkSxvmfY]ZlGx`|X_yfY&x4l%k&hy' );
define( 'LOGGED_IN_SALT',   '1SI|Iw6$3)fOTxOgsGpRA(`4&Wr>g-g>.VgDd4bc=-VjD2ft,zFKkD(E-TxNY@Y_' );
define( 'NONCE_SALT',       'A;GW_saBv0c3w=!fV`-/ 1tx>$~RJk$Q*)txaJEJL6}6-q3;Y?L4>~vufB`]~dif' );

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
