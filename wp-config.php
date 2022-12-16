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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'catlog' );

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
define( 'AUTH_KEY',         'ldg/_TYcM+x<Qj7xE&5<_6w+8,kW+#2K%*39sHDQ7<0q2gfdq,~q>&-t^xJN;!<O' );
define( 'SECURE_AUTH_KEY',  '@4f[m5RR<P,n#gvCzNlk4*^^sgM&pfilbarZWgNGD,Z)QYe I+,*>?NXdI#LBl[f' );
define( 'LOGGED_IN_KEY',    'qUJ;65[BNLDD.@AB7T~`Pv{Nq`^M@FQ3MJr#VkEv5!dT9o/OHVEERcI[mez^Xi,&' );
define( 'NONCE_KEY',        'UG[ YC?T7K,C^D6~KXDSr+H$dwq$9a};x_n:D1x=~rCqc!(z5.m%5U8@Sc@fLUNG' );
define( 'AUTH_SALT',        '+Wk|OghI0ttgVBD#2_Y_l{0i%&1XBbn#&!K0rKH[]C+[%Dc!(ge4T?l*l0w>qGgm' );
define( 'SECURE_AUTH_SALT', 'cljY]9G#p254ZFd|X<M@l*W&|N8i&w0+F%gu(&A^YTZlz9OPx,SiUx{rEii0~qgb' );
define( 'LOGGED_IN_SALT',   '14~F9hKp8S_gE#M#y|BfkBJTXvvDl3[G)4Sb8F8=ow]7sJ_ +]yrMiu{o`}>Z)o]' );
define( 'NONCE_SALT',       '3.%8Hq])~B6Tg0?tQ|`D#.7hwx3upMB94Cr=OD@4zZH0*+Ff!Ceh#UaMfci2-Q<M' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
