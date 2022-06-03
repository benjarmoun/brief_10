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
define( 'DB_NAME', 'brief_10' );

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
define( 'AUTH_KEY',         '#U>M9~8}I}LUCtf]sv]%*W})>g}:nYx7i`Qul D5,hQHze9K2<XL)V8P$%bYvvF.' );
define( 'SECURE_AUTH_KEY',  '%mI&zcTz5?X#n(<wH(==b=UD ML48hUsd[]vQlE}9:~]/-SWWuusfGX()X7,!_DM' );
define( 'LOGGED_IN_KEY',    'b:*,^SJT3QLIxB;W~Q{,3N)kxA.cU9&c)}hmr8&.{|:Q@!C;h7tK2R:;cAe2}@eO' );
define( 'NONCE_KEY',        'H19c~Ub^h> P24p9L0IRY&B&12QUMi,hv{0rMHlVR|aS]|U:n]_QxueKz>{EqwOz' );
define( 'AUTH_SALT',        '[2k$Ke/uN2|`[xFX6u@n; 0{wIz%GFe<xNTb]k>4;f%&!|{08n%<jp&Mn8>[XfUm' );
define( 'SECURE_AUTH_SALT', '&Na@`32e#vm8qc+`e,eDNE_/}ic9]d43U.QwSi?qSW!UBtr-x4:KZ_y +TuGdj9j' );
define( 'LOGGED_IN_SALT',   '0V5hUd-njMv0~aCU@`aXJZg*3EV%vG29XBDUFQ$HX+`6CW 2VDceY/ci:U%ko$.:' );
define( 'NONCE_SALT',       'F1[cyT*62hQf}YB`fX?HV]e*QFQ%TK0>)b3-UCvkA`$hYU:{nAER&n@5KBGX;|t}' );

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
