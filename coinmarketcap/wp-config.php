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
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gh[0/ORvE&D*$YRHD(-_2ui:z_eVGtpeeiJJ_a(*tIELP{KIbH)huI+x)V}VjJ@#' );
define( 'SECURE_AUTH_KEY',  'kb=/pVs%`#Mc5c_6F+ Up0{eMS2@p]L9=o]}kS, 4W{VW_yY#qze)J7Zp-vu:*?c' );
define( 'LOGGED_IN_KEY',    'hL_Qs-`e8gr^]eF3W%5JJMw}wYY;71K};*iMMiE8E!Hpf/=f_zOK< blDSAx]>2Q' );
define( 'NONCE_KEY',        '.dMP1qJ [2eoa<2zPiXsOb,ek1swbF/hebzg?J|{NQib11N5J@]Kn4$it`d~HA`U' );
define( 'AUTH_SALT',        '8W;$uPJSr$p&N7lKg84!^82&opPI8@&P=fjL%f5=fuQC4?)fBUC8q3Z=|.t1 xZ<' );
define( 'SECURE_AUTH_SALT', 'FQU~TBlhBvf3ZJ}{TBZ~jf`.^P:Ha5d[%1bs!b)u%KkXGky-:|N7tCud=g}FdTAf' );
define( 'LOGGED_IN_SALT',   ']S:sNNQQ XJy|o-cM!c)]_V[CPMt52l30:alkLZg7bsl^Xy:Y7/`dDo[/KT>O:v0' );
define( 'NONCE_SALT',       'XjE1dIE1!hi9+CL]7|X*Y8HvL<nJej>1o*iI-z?fg$^Ef3zTIICtZhX]2fd&-aC!' );

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
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

