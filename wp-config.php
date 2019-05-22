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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swope_law' );

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
define( 'AUTH_KEY',         '9]wy0[`ql}@xaw2bF6!<L+Q*zY{O,{~eSYHs`2@iwu-g@~cQ6y.x$&M+d)A82]6]' );
define( 'SECURE_AUTH_KEY',  'h9wNf79Nw_7OC;ZeP4~k}>YFw4S7S?*U,D-mydMlC*_bl8+Fl0:dt*n{[KkLhx@r' );
define( 'LOGGED_IN_KEY',    '7et}z3=5r+II`sO^5YqZVp-k ;)*LO(u{4%gD#x4Kn_A2r,=[!.3laDVQ>ex1LV9' );
define( 'NONCE_KEY',        'L3Kf)c}gCY..P3PD&W?_q06OXLh#H-<LEU/fH%9GEmm``DM*Qunl?***H*nF(kPn' );
define( 'AUTH_SALT',        'XwtTK7`~[ Na3!Q@7pT$cS.,p,I8`_zCox}2dZ7cwTXZkXvZpPkU08yDpC;4xV{f' );
define( 'SECURE_AUTH_SALT', '!l+&8;F6}3MXd=+UO{pf:|22[L:~sO-GPJqB&CxPrW#C6gV%a8ho@8!gAz!4CIq8' );
define( 'LOGGED_IN_SALT',   'L#9I2n $z7ImAyY }MnbHa(|{KY,Xo[:P{cV=)Z1rx@{a+vzoZF%T:gdgIPMsvL`' );
define( 'NONCE_SALT',       'NCVjA{?Y1nQ_u3W{gll-6JS6,6OcwOQ!q_XyCD/((NmiHsZVZAx8,ZvLpu&F*O,j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
