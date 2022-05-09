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
define( 'DB_NAME', 'book-review' );

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
define( 'AUTH_KEY',         'nr$x!fD(&Wpj6a4R||ep>B;o1hrnwsoAqq4]T<om4b`@%{EG^BOA%Mu`iSjB0A&`' );
define( 'SECURE_AUTH_KEY',  ',;YbKSm/[;P[BV]pMrfgwln2q4l~:>0l=+7JZS&%v@pIA}(aJ{O*QS1qWnS<B7DJ' );
define( 'LOGGED_IN_KEY',    'Aq DUZK2Z?^j j(Itdxl_EoVCkg-`|4og>DxCz12/nxp6$leUHxm-_]jh9{vxB$@' );
define( 'NONCE_KEY',        '?hxj+^s1^c3 $6[?T6unv7~^dVdS^r-?;BeWw& ql,blmsrz,D* fIo#W=5sj/}>' );
define( 'AUTH_SALT',        '[u8f;Led@AM29$Wd1=rXd=#.T/<>s~i;dvNxPxSoMH(GCFG91!u4lKr5vi-T4 pz' );
define( 'SECURE_AUTH_SALT', '/v8{vw`e2^jIZc(+p+?_o?U]x,PTMye5OjmTcPZkW;1U@HGs&B>9*mU.B {fLG~K' );
define( 'LOGGED_IN_SALT',   ']``pC3NGF_2.N5ANKR`[hw%!&?yJ/RQ$j.@:NXwj;#t]%NwJAtYW/l^a6DoCc>Rm' );
define( 'NONCE_SALT',       'O#T9FkkKFC*;-%Q]{q>shgK2e6x,?D(0YmIA yjQL,,xB3eogOvTe*K=p`?3|4}f' );

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
