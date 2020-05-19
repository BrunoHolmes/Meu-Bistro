<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'meubistro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=pZuE$`7L028aGr9.2t=M|oz2iA~L#7%$sopO*8q1tVWm74)7n!w1MKVD!k_p8!^' );
define( 'SECURE_AUTH_KEY',  ')vpXpn[Y~AW&,lpeuT?lq7XY34L={5+3Wfzb#@bJk.bnCqajt6F&WM|gIN5kA(i(' );
define( 'LOGGED_IN_KEY',    ';/q(F6gD;|(W-Z+2n3L1CXo7FQE2oFSd4~B{_?+.|wX_v;gC-yYp<8QN :@]WV4X' );
define( 'NONCE_KEY',        '>GdSnx(/w*?F+=.h]wdr]TgJb#: h{R-R6@wah@W1NmRn1IQBP O,nF598y](0Uo' );
define( 'AUTH_SALT',        '#-t!n:qe&X|n{6csri!>5E*Y)9@;ovH,(<Z@A&i.8%l#6>B7OC7@.BJJ6xjte$tB' );
define( 'SECURE_AUTH_SALT', 'uRoL~~^|X,8qE9DDLqI&H-OorsDXXqS!vDF!]iXry6w9nCTa$<CcZP5E(7wjBF@Z' );
define( 'LOGGED_IN_SALT',   '+sn#3o|T!E/=AUX{2%iK=9.{q9nWKe/8,^2^Lq+}p4=aDU?Ig2eeX<s!$)O>50CV' );
define( 'NONCE_SALT',       'HxW}`:_d1{I@tLXLy`Iy_ znxcZ{K5Hk37a##6*FOLvqkK%!8(03I3DQ_rr)vle`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mb';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
