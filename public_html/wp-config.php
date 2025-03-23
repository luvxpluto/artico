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
define( 'DB_NAME', 'dbf6kjavnxidfl' );

/** Database username */
define( 'DB_USER', 'uavsdn9w601y0' );

/** Database password */
define( 'DB_PASSWORD', 'grza5lewqrwp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '2ka4aN:jQ!:^35^#9TP;HK(Cuhn[he(49U{8RSX((G5I+CN +Z;z |-6*od$$KzO' );
define( 'SECURE_AUTH_KEY',   '#3i0u$uC!6[[E(r^8}/N2 sxV:h)vY*=jIG#^oHD&_U^0m~gjXim&QhULix~U&F/' );
define( 'LOGGED_IN_KEY',     'n1m1zqoP|ZpF#I%c^yaZp3LO3 N3Bn=HN`].S}5yV9<]3x3$XGVZPz_G6+2@IZ8g' );
define( 'NONCE_KEY',         'avNRG>0HoBQJS%Mg]wYQg E|U2ABc~=n`%pk3,e?_{M-fc))[~Au2JG`wp#R[{vv' );
define( 'AUTH_SALT',         'Lv!w17,g7ys! G.JL78EX-=]1{R8k1_.upq,a;Dhg&u$FUV<jM/kxT=SKOYhptS6' );
define( 'SECURE_AUTH_SALT',  'HJV:tQ5;)N8q-cly{|4,hx-RR[^O^-a[uN+{~J`eTBjsT2Y(ex#oA+OQJ,hod?@#' );
define( 'LOGGED_IN_SALT',    '>[i048%?HLe`KC[6X~{ h!@h+!GPWJu8=tSJag>/dMc}Nv>` ,E5@7YavnGO*iC(' );
define( 'NONCE_SALT',        ',B}f_vY&3(C,!v88$~A{pdAO`Xq*ex1R:+KWk}$,rY_Px>{|!_R/Wh/Bh]Z3Kg0K' );
define( 'WP_CACHE_KEY_SALT', 'IgyK|/gaka(sjJ_7L]S+=P4p6BUT/8V*w<ja_ 9@lGj!Seal]{0I4*E!@wrrGOvs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mjo_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
