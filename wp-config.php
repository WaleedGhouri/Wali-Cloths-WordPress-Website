<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wali_cloths' );

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
define( 'AUTH_KEY',         'O24]eY:tyn[x0W=t_NVl7k_~*v-J~S<j.Vxoc.W$0emY_|l8EuPrq`gtn#J]b~%,' );
define( 'SECURE_AUTH_KEY',  'U`:X~mr7sr)D~N8[o8]||JdI]]]TM;a64).6_InOniuDQ2z7hLj?z^kay~WZ]Vr#' );
define( 'LOGGED_IN_KEY',    '#cBhNjL/7N.~I$3wB/x*<N%cP8x~^;jzmT4c[ov<g|2qb4/KCOD:7r5J/u sJhAQ' );
define( 'NONCE_KEY',        'd4Z&xh|,g!Ej@?Wwk*7V~[?6M1a&b8v)eX$4T=0T&6S[P{o|7ERcAuX@0Tcs$iLK' );
define( 'AUTH_SALT',        '<6(]*3T6(Ax X|ZC7E#N<)Y*xNS1f>w?i]||:uW/Hjm?DR;T0`qid!%rdgj5N4!b' );
define( 'SECURE_AUTH_SALT', 'zg!3w`l0*UJ?onpjKO+Y03A0K&)j*TYtY+ro 8W%F&:uNlqXE=z27:=~[h[&6bZ:' );
define( 'LOGGED_IN_SALT',   'lpdF:;qJ{z6sv@c8^.fbdCe9_#]e8Q$o`<D|D=@3IJ.Y={T4p{GTfSIqv/fF=UWq' );
define( 'NONCE_SALT',       '>FUqP%.Wiydkv4WNR8b*+t#l MC%@i&*J1]iD+I3EQa]Ce5Xa_wP4V]fH!Km6_W}' );

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
$table_prefix = 'cloxth_Wxly09';

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
