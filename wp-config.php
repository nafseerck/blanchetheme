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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'oOgLONSVfxdsGPXM:*xI)BM=s10f9k[&ZEa{,6]?KJ=Qnxt>k(CcmR*j_@HNuuG?' );
define( 'SECURE_AUTH_KEY',  'lDm3J0T`l10Vn^pplHfG<0$U!MAMxFr.W U!pj[ :FBh^b%z l)sB,}qyg2 ~qO6' );
define( 'LOGGED_IN_KEY',    'h;YALgkiD0e`LpSF)(s2&uQxY>V[zQ]Tz*_n%njv>JB ABWtyjk`<uE%a9Q1n:~#' );
define( 'NONCE_KEY',        'IR4j3rvX,jaIuB@Yqqi-Gpn?*mRuK[_Vls.t9|,j+9Mp-/v%J>k),2[i1hVg|I@-' );
define( 'AUTH_SALT',        '>N%fw^<ljrw:)~}i>?D9,%aME.Kug/1XK}:xi(We0;~w<^2)Ty`R*5=1{x>,xy9:' );
define( 'SECURE_AUTH_SALT', 'G%YxYcJNy;Q/QC21Y!vOdl=:Q7_0vu%<vt<wi>}Nut1;yt+BHPe$d+&cd_f@Sf6}' );
define( 'LOGGED_IN_SALT',   'wjxZdd@JvPitgrq=~!Fl|xK$&rD@r6JBGVs`KmL/ep@lGUOez+uIIv>EqxQN9b@/' );
define( 'NONCE_SALT',       '5v}^&k+anc&)nNt!%.m4*?[{XS%0fg4==u8}C}LHX>c{!>N}20c zYJ[SpYC(oa!' );

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
