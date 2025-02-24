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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'XwGh?oPIKli%  %<9W5Al[~O5RxOXVu7;!N3Rtad^]Jyc[iF7.]AXe-P>~Xj>#c4' );
define( 'SECURE_AUTH_KEY',   '8yg/d]G2A#ZvND._<j(5|~BQgu=:AB:r*v(xC~8DvZsuGwr(O-MI#M}gz&}*a9|-' );
define( 'LOGGED_IN_KEY',     '-,5RJp{<O>@9!,Lm]bsfwc/3vje=Z{-pSFB52yHy&Y]Gjre0Gmbr*r|lBc4>zvi)' );
define( 'NONCE_KEY',         ':<*CdSaX/fE629*j)XLE11pzYj@Bn,S#uYsy?/6.$8Gj{~M_K r/dWMFwHt46g$d' );
define( 'AUTH_SALT',         'CO`j[Ex}MdhS279EFX ?hlM_?i!chT3X^#GD,:GXM)YBN*`oRrrSq:7RHYbC.WQ_' );
define( 'SECURE_AUTH_SALT',  ';E_>9|=`7EahsX84|2WWSwsICP=X36s}V Bhx#iqD?2}E%?3zzaOjQ,_WB-.o?<h' );
define( 'LOGGED_IN_SALT',    '_7-b@zACJc:kHVEVvL_.QhNjs|]G+H@>nC$;xNpN`e0OnszW;2LWflNC@UDQjQ|U' );
define( 'NONCE_SALT',        'bGdJ%S7Sl5:6Pe)cqr/.&gFc.^&8ViXjh|3CjTz016:*kj7:GM}+h7:S-B-GsfP.' );
define( 'WP_CACHE_KEY_SALT', '+iJFs=2dj$Yc*O/K_?t:gt%|}10Zk9Dd%(7x&^jLw.Pto!t2;&Pf3v:5xm;+c%5,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
