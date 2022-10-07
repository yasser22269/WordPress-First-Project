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
define( 'DB_NAME', 'wp_level1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '{P|dVQ:OBp{<=UBpY:&VN$x$ZV9L0[{-gvD|]*/[ZDeX:bp}uN8qZ$f@|HGu-b]8' );
define( 'SECURE_AUTH_KEY',  'dmIX(1:1T?]vQkEt]%g8;zD)T%DxgSS?CZ)Nd}}|thF]S.;i>M;c*vq;Nu>>$Y%J' );
define( 'LOGGED_IN_KEY',    'IVqjx1r2Ah`Ib>uD[ZApr7@w=H2iS.B_,|WPV:$SaKMKJJb]m_8Y]]kGME_6k{AH' );
define( 'NONCE_KEY',        'q-ul)A?TKP2DK??C5p;v[iOhg}X**=)[kgQz9,5v;@j_HK{{fBE7.b-LQn^Yg-rf' );
define( 'AUTH_SALT',        'YE<,T^wo(m~<CTT24g7UG%u #21A!tUh3c99R[OhHKxZ6.{uPBndIdR<[/kxRNk(' );
define( 'SECURE_AUTH_SALT', 'i_D[sv._>QGk-&R9u)=n(eN+,Wto8A@Ie-IT tQ.xsx(2 ;I l@^-Kl GRuAZMY ' );
define( 'LOGGED_IN_SALT',   '*Zw>J%NLbEfg`9Exf1>)<+T(`2?@sOUD-{p>r!6dKU2R1#`clVF3i2K()XgIu{>k' );
define( 'NONCE_SALT',       'ls#&sr[>F7Q5YhGWwlKtMF{{K800h,YXd] %-/`w~,]r>Z?+QhGYN%reJ/>R[4zy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dev_';

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
