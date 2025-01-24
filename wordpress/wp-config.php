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
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'wordpresspassu' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '/;)/w/ppN.Y7c9-qjE@drcvIRH!fwHMeMx.!<?m`oy(-s-FjX&8L7mo&9v{h^HXG' );
define( 'SECURE_AUTH_KEY',  'FF+3oP9t<HfyA&Pp4nRmVp&{{1T`)Yl6UC3(5w=t]$os5XL{lOc78JzP)?~2qU@t' );
define( 'LOGGED_IN_KEY',    '%I?WnAOb[X7&9^;Njem{Gen+OZJYw9Fb0tXgzYv5o}6_qBLq!<,H/oN^]38_3wB8' );
define( 'NONCE_KEY',        'lak%>?.:@%d].qqmuv^J 379v7~nHtW+JV6YB/BG%hT1lD}kZOefr9Puf?F|<7]O' );
define( 'AUTH_SALT',        'nmw;2OBk}FRsf9O];4</uC,Iy2=9TzC4{ah,f+4VwTs`c>LV)^{Od0NZL+fI^5bn' );
define( 'SECURE_AUTH_SALT', 'pQ/m}|~0q37&:@F|eEBaq!^b|NU&LiRIHn-Kk^**x])0r7k0p F+!qL~pBg]9mTw' );
define( 'LOGGED_IN_SALT',   ']!K-qqcdm6we^z]D0liUJF4^%Q@8S?wck|=eaRoOTQ]h}&.P027|l!NV%D#y}AqX' );
define( 'NONCE_SALT',       'EqD1(gNPygw<JyJM89DvQrTT5(H(Aghqu)nv(?M(RJ6n!ya[TS4}@C}z+</C?V:(' );

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
