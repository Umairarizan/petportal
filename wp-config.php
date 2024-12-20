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
define( 'DB_NAME', 'My wordpress' );

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
define( 'AUTH_KEY',         '/vc0r;Zmm9%vp8y97t,Nj`bXfd&U&Si@0]~/+~5vAD{i|^ZRvS1mqu@CmpB13_Kh' );
define( 'SECURE_AUTH_KEY',  'hDo[OF}St[)lG~=qnZ?B :c}IZ7G!+WBjPCfV6WfZBcmC;d/Iwq1&<b(Ky%w e</' );
define( 'LOGGED_IN_KEY',    ':95h>^~/#Bjv{AYdeVx]gF$xo$qJ|+Yjj U2qw2DRCO(UhV N|_s,3].7PZ$;yD#' );
define( 'NONCE_KEY',        'ZejtOD3AmrgL@H1c)B5/0%JZ;^AEUF|%VAA}/<D6Ld-^87cDyo?7I68J~^`?5xSR' );
define( 'AUTH_SALT',        ' :V(l,r[V5o+Ldz%/cO+}8QL)Xr91x^)@w_u*(+7xzcz0i{DJI>V1))_au^Nci,#' );
define( 'SECURE_AUTH_SALT', '{fvrZci$::.3T9o^o-?K6!06y^K&Eu6~#]Wi2Ph=Tu3Z>cz+bqO6BPqjLSFd51Ms' );
define( 'LOGGED_IN_SALT',   '7%m,6na$.|*QLKL2b,]hK=th4Q:*idaXR8?13!wDl=_A]k1lW,+*H2o8Lh> 9B4P' );
define( 'NONCE_SALT',       '-7gn{G>NKcP*Q!(xq8xqojY^;o}UsZm+BzZ}EQFgO;Q3;)H{4y,pUg<)xGe(.Q0C' );

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
