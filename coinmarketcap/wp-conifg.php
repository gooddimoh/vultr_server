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
define( 'DB_NAME', 'coinmarketcap' );

/** MySQL database username */
define( 'DB_USER', 'mysqluser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysqluser' );

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
define( 'AUTH_KEY',         '{+`>5#^:=UO5R#S1F]N>~jdQ95!mbxs6P+pXk3Ss*;/k{vf;/ie#9)J1(=i C0_U' );
define( 'SECURE_AUTH_KEY',  'w>K=vFpAcpbd+=vS_K^xnnoilT@;NwNNr-SJY^xv uHQn_y]R~.uyXN._V_,k9js' );
define( 'LOGGED_IN_KEY',    'k)Ky%t_4)%v{n!.8W)K]A{1i`]zE3wabOhwpF4Edydfa@0gr~m8EX}9lQ~F}ix_7' );
define( 'NONCE_KEY',        '_ad,Y!*(CH:GacWSLg5VI,o$u|f2|gv Ih3~Xa8nM5Z@Pv|0,{tf0Zt:Bt8St6wy' );
define( 'AUTH_SALT',        'a[FOygOFTk*V~#qU#E7,FT?sC-[HdUsC~zd!WBHHN Ap,/R1*7r4P.$4H8k*Tgkb' );
define( 'SECURE_AUTH_SALT', ';y1JZdTT$W5{1@jC;Jon[}h79Up1Fn a UcrIXUSUAh{]v<-~0r:BB~Q}xTclnnz' );
define( 'LOGGED_IN_SALT',   'uvf$@<HhoSfun.0VDJ1HAt`MhNkD2jLGTvs6c&@5ho-{,8KY+S}zNyi;i8Ss?7U;' );
define( 'NONCE_SALT',       '<P9DqoR_YgkX24YwgTuEjxDsv%?@?tEvmEIZpv%rw~e4Px00ISGym8wl<yLRi#1m' );

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

