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
define( 'DB_NAME', 'create-theme' );

/** Database username */
define( 'DB_USER', 'create-theme' );

/** Database password */
define( 'DB_PASSWORD', '25251325' );

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
define( 'AUTH_KEY',         'FS6L6z-rzmWOY3I7oMXT+%[tAs^Tg77.y~|58_0Nyg@)!&cPMh1*zF3E:oj(hnOv' );
define( 'SECURE_AUTH_KEY',  '_D_VWz/|[<5dXx`wYVD3{loKCvm0})3Lyg&DeK&[b8=Q}n8)D!~~J1RfgH|yg/UT' );
define( 'LOGGED_IN_KEY',    '@hJ#]X)ULP-NM`%L|@yEB+?h34O)k@Zs=}fGs*J~7[@-U>%KAwTNd0w__+Rvpl}}' );
define( 'NONCE_KEY',        '6e-l;I7{bok^S8pd6?Jos&]EMd!ECDEd&Tzk%%Gs-%I9R:I{-N</rd$^gWm:k|pG' );
define( 'AUTH_SALT',        'yZh10$Wjs/t(h5aBqeMHI_/7Ei.Bb.#u^@x?vSD]5p :YPfW`o[|pz~$|.#:$0nM' );
define( 'SECURE_AUTH_SALT', 'zp6rz[rcO% ^d;Pgp>qbEupOVt!Xb2.q1069?G{$d] x8FH[AJoX]>)YT(O{&{[M' );
define( 'LOGGED_IN_SALT',   '{${:K@+$-13axQCLZ(6LM(b~MSxBAOP$r?#=kg1[r=p~b#$IbPjX%.[6@9duAK X' );
define( 'NONCE_SALT',       'BWEq #e[+6{R=IEdSV^Q[Hih[1;mBnN+:]#N@rjtYLaHPXkPT Y>3zf6nq*&4(Eh' );

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
