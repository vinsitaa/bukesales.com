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
define( 'DB_NAME', 'booksales' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         's!oKZoN4n.6B2jAci=Ut/Q3PB {LV45jviM*aPT~|Y-sax3h 3#|@>ujR79243w2' );
define( 'SECURE_AUTH_KEY',  '^qSi(Z_W.llMKS2z Z|ogVRK;,OJ$y$kOLHQ6Lw4J%n?,!K)T==}vsFTYDmX(Y$t' );
define( 'LOGGED_IN_KEY',    'ZA5hl{:N=>K=?S@FfP2x]UFQ/7&0IhR<xs>t%7^U!YRqFJ`+?OM0o-@;SgVYO3r:' );
define( 'NONCE_KEY',        'u=Fd(>Xv9Uw0<qC-XBiF*[x`VOh59uv$W)#&_G+vA01|n#i3A@bQ7xzVk)OjW3QY' );
define( 'AUTH_SALT',        '^v6`QrFH>r-Ax!WKg36-zUzu|3hykf>o.6(7W Vg$8X@H|zG=kU3S*;uYK)k424]' );
define( 'SECURE_AUTH_SALT', 'FvJ*P/f/9*(^a0qP8<[T3(:+)w4GzoHJCUNOwTbxntZn1Bt[;xM&IYqz&bkhirm~' );
define( 'LOGGED_IN_SALT',   'l!=N;K7HOMl-Sc*A~e(r}*-/]Z?}x!`7[dh=DX+<,k$bbEar?hXi?s_3<]5Cp^g{' );
define( 'NONCE_SALT',       'EE(i[bb&{G0=HFqeSbBSGAI3B9y~!0rNIXL!QY$]W%r!CVt!T/|8M/w_6>>=a=](' );

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
