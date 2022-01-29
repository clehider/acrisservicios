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
define( 'DB_NAME', 'acris' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QjVOwTU(St69Ybe1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'B^*SDlC.%f@Z[?geaDX%A^leyy5LeF :?u38}IPOzx#42u[:n*>)cD~*v2R?W!Xh' );
define( 'SECURE_AUTH_KEY',  '~$ag8% bE3>vET:}+{xBp>?!2pe~i? m5&~ov`DtS1l0!<, NK_pi4/?_4CFxgdY' );
define( 'LOGGED_IN_KEY',    'yZ2&h@IL[X*tyZ3qp!9!Ld|KBGia+/u~x/4jLX5m`Z,z+:b|Zym]u6&?JHCw=KCP' );
define( 'NONCE_KEY',        '2-KoTv^e`wh4~uO9c^I (:f:y.qwFsXtFQ8sGIyB]`U<jYV&2m(Ln8@)v|#(W(Yu' );
define( 'AUTH_SALT',        'ZH|/J^(I1 ]Nde#p? 7v8hM)J4^PvH1|:?=WXK 6,W[IYY_op[0{?F_bJjt8}8nj' );
define( 'SECURE_AUTH_SALT', '^Pv3!iIakk9oK1>~X@%72uw+~RV:m&/ygNrKbEeYvIF067%S)G]=L]!cbJ8!nR@c' );
define( 'LOGGED_IN_SALT',   'Kw<1B/tn^gRSqgeT@3/=W.5,)?Rhjj<Rniin]/{c/e}H>1N*v.37/x(R&[UDn&e<' );
define( 'NONCE_SALT',       'iLZ[|}d?n{HUqZK5}n5dm)2^4AiVKuQU#*mV!JGYN~j)7$eukKR+-?fgvONU28CP' );

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
