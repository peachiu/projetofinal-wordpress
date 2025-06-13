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
define( 'AUTH_KEY',         'XkE lAVc)(Pi%1ln>Sb)v@x6o|6xgBn*Wt!:6>94{a,K4TI-B:4m6N![y$d=IYk%' );
define( 'SECURE_AUTH_KEY',  '2DSxVAu(^`3db6rv/#KB]}5f:Mfhz&Mw1e[JHKSi*hT[f=Q9i#@f-e+UKK&?E-!8' );
define( 'LOGGED_IN_KEY',    'KfGPM6Wc%d@Vu7.;{gGh^)VIk&.j74K|X/^]_+ljf34A0h(${Wsa@Pq1WvJ<~Y:>' );
define( 'NONCE_KEY',        'x4.K5sUw7ueqVd 3 VaU`bgIkOjkPrV!mTRhmS6rlDf9/:$N7AeQOhW)G$QPS+~A' );
define( 'AUTH_SALT',        ']V]qx)a*{xgFm?(-cCR|k}3]J~_i=3~96:A:Lzmcmm)F/JP7x Sx~!X/))IHUCgz' );
define( 'SECURE_AUTH_SALT', 'N|,([iBrm+H}5!b23rI8qi?-c_<8c*XDE<7eoF=^pjbU=@yF7ss:Np*`@7^lcnj,' );
define( 'LOGGED_IN_SALT',   'Y?J+IHiZ f**~{9s(VFGo o@)[51sNke#b<c{ptQ]?D0l*/Y<=*pBTJQY0k,#fX3' );
define( 'NONCE_SALT',       ',vi1z9K1EIxg-hXI dE26thKR|>N-1PLb}i=Q,P;YRJM=PT~7*eI=Nv_?5EOh:P9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
