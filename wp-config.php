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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lab3_desarrollo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CXo;c$.tdLV%`Mw;J%,L2hMn!@d[N&<7SS;x<JL6O6M)j!DlGf1>/kY}B58]TfjU' );
define( 'SECURE_AUTH_KEY',  '!wgiDc:N~v#ZRy:#s,71?^iyJZ[s%3Wvr!jyB-O20D@rY?->@}(^=5-!-eV_F&Hp' );
define( 'LOGGED_IN_KEY',    '%(b@KZ+.|Xf77*U%qWwXRs:/T3GM|ioQ7rHtks)bHo3G=3a*}D<#lNVlE+yZBM@q' );
define( 'NONCE_KEY',        'y+@=*GsiAV^wih{dtRa3-sy%i+~ L:vndc1}M!Z-pV(R#(Pk&3f!ch=9o8LPYoa?' );
define( 'AUTH_SALT',        '`q=lrpw+3,ev?8c]f1vhOF$@f[:C=&qN|:T]S5D&)cu-yzl5Z>z)~x<eCC>}T.o?' );
define( 'SECURE_AUTH_SALT', '&+~<XxdlT)G;{;Z_R|~Z*c<rx^9a-`VAKdQ>,@F+jk%vn^2-{iW=<4/IF](ZWH_:' );
define( 'LOGGED_IN_SALT',   '.k}MV$u}B<^9EBZb1}Zacvdi8y92*]4OO0:9qH29WDs3+45[diOJ`~rziIN9sG!M' );
define( 'NONCE_SALT',       '9ath&]||*n$#=BpdLhGci@:|nN{a1rWQ}aN_kP?;HY(b/i?2l_(QO3%{`lATT=4B' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
