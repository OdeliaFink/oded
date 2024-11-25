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
define( 'AUTH_KEY',          '6+b8MB+{Rd8LveCk}2QP{c&p?6vPnO@R&(jP,S1DQDDPub9qg%%7oz_+HAhnF<o*' );
define( 'SECURE_AUTH_KEY',   'J`e6+=eI]hDS.Lz31z$)5iVC.ziJEHW%yK-p afn0VS#31G:-*#3+~I~n?{F&Okn' );
define( 'LOGGED_IN_KEY',     'abK;7.$]|v)The%lob{ |7H/*4sZfaZO1JJ/HPOnaxp<K<4M* =bX*iCjMuv O,G' );
define( 'NONCE_KEY',         '>e!XohAikqLBwl/yC#BXlE8xP_g?^Rs:*3~-]h&}Y9cSTmGh6m)JW2/Nar&Mu;`D' );
define( 'AUTH_SALT',         'ejC[{)Q,.|vh5>}Kd`zBmtAGqR;uB9#|c2iM r paotzK)4DF0DkPL04$0xxVN*]' );
define( 'SECURE_AUTH_SALT',  'E[j@e#.AhqSV7HcD?Sqx$E`0RWenQ;${W9`I>3<k9=dxnOphwR2Vp4f;cxbxvDKe' );
define( 'LOGGED_IN_SALT',    '}uuPn;>eOi6BMY>?2*l!FE :91(Z3ie6C.NvjI[YBstP`fzzP;U$20*~x3rH[gS ' );
define( 'NONCE_SALT',        'XP|22>!e*iX)l!>]tT}*pjDi7?ooQ*[YJ7G5>`!W{0lfFn0iApN_RtuU*,1O8gh%' );
define( 'WP_CACHE_KEY_SALT', 'Ha,>+ud/yOnS`L)Z-={7$6b3FbM)j/zXPQFYR)1+WTa_Wzpk7W{!y&vgi(k3`NtM' );


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
