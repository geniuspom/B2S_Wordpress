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
define( 'DB_NAME', 'ynu_b2s' );

/** MySQL database username */
define( 'DB_USER', 'ynu_b2s' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j3KztFSba7x2' );

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
define( 'AUTH_KEY',         ')<<q*V.YA:a0hn@]xV-zJW|{jVRg;M/v.w[v9F38rWVf;ObG9A}G,3?Gn@vgIW<:' );
define( 'SECURE_AUTH_KEY',  'Y7lqM@t/o=C6xhryWSQm2$pC`pnw|xc$NT2>/)>Rt=Bk{Z>=|kqo1^^oY&=P?<p1' );
define( 'LOGGED_IN_KEY',    '=B^t( !yE!PkqIf_R./fj9(1=EjX,wUh(xzB01`:<T:fk.>3(4yw(+s{p=ePmf`#' );
define( 'NONCE_KEY',        'm jzm=ML. ?w54zD7BO[vE?x4N!PZ{KxAeR_6-e;rQ,/<A}rJ6Oo4G^}@0*;O0#;' );
define( 'AUTH_SALT',        '8D% lWTF5-hFgb_{/5d*Y7]V<.?X bAQ|z#4r;/m{`VFmHZvXz$| Rrt_jVT3f4a' );
define( 'SECURE_AUTH_SALT', '709v{Qdf;o+ENd(?l$8B&34o#P6/ycOe-NWSwcOz~c*Cpb_/! bPlhPsQd(bt[rB' );
define( 'LOGGED_IN_SALT',   'UIs2i^N/9vK@]+[@_%$#_ np;@*B}1B}DFn20 5;Ts{KfsZ$?#P85?lJ2rDi=9@n' );
define( 'NONCE_SALT',       '6b;5nxeq_mH[1.`S-U>fs*-=_X{~8ijx.Wxg7ZqAHYUC/7I,aQ16kTYZLXaFI W-' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
