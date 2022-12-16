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
define( 'DB_NAME', 'woo-fooddelivery-lia1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nb+cB#id@{v?u7+^m9;ZxGxGyy55hK{xZf]t3/sYqn~=y]{yz}S6L{#:@6U~_))>' );
define( 'SECURE_AUTH_KEY',  'i-2bb~b4!}^uH[kOX}MIWB!bLh;M;5oZ{v/[c=/tyk5<ZVfJ0k=J~0PFs%{g_7BF' );
define( 'LOGGED_IN_KEY',    '11xIVuGut2Ezqus3B!6W%8Rt8jLN9m?S<s{pD+)CrZ]5O+VNzWAL>Y+u8&SJb<J]' );
define( 'NONCE_KEY',        '8U9KghI%9=ua.9q;w@nAa4#df9>M+DV%R,B}[wC#7IE> .jd+HbWy)6#H)hShs!O' );
define( 'AUTH_SALT',        'n6cQFFg#L~mU<v]h_p:BTow.K~{3l|YzW9cQM#3uz:l(.uYZB1g MG=edJJC]QP^' );
define( 'SECURE_AUTH_SALT', 'F5Gp8% |kicIiZH9f<wgRbDhc*ZW6%t=C.uhY.0,1D /jBFVo8ow;9aSJRumlaLj' );
define( 'LOGGED_IN_SALT',   '@sQVDwyxya@;!e8Er?LjDt;lU9YqZIEei3Pu~8.7d=w~Y 0MSo1mP@Z^m[rwI9t#' );
define( 'NONCE_SALT',       'e%x15JKW%)!8npJ?P|#;qX6n>(]_]_b1xj-,:Wbz_-=,o9iVJ;{jeR>~]fe(Hx;*' );

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
