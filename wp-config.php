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
define( 'DB_NAME', 'escape-Day18' );

/** Database username */
define( 'DB_USER', 'amberLin' );

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
define( 'AUTH_KEY',         'i&pT $bboT|RnLw9->h0Wlu/M`dJ/g<I)E:e7O-sD@vT)BGBk|CH,L8tW{o&;S4w' );
define( 'SECURE_AUTH_KEY',  '34%]SSE49u_3p&YhOQBbv}B2_*}LuCJK%t]$H]H(64u,:My;@JB~:#OT{N;l>lFi' );
define( 'LOGGED_IN_KEY',    '++hCGRZ(1*!70Zi14jS!fm~ZCb;o@bJ,D`e:0Ej/ZE>31GNC<o|e:/V[Yt:Pq-yQ' );
define( 'NONCE_KEY',        'Z$8VU&F?|uSvtt_<k{qgmKS3o P;LNMu}w)GfPRvIWd|^7DEPBL:?9JVpZV:`Su?' );
define( 'AUTH_SALT',        '[:3)mzBJB;ZG5y:BgF3eC}Cv?<7slK,#~{MaD3oVBipjO$vjPxz5 pRWri-{kTY;' );
define( 'SECURE_AUTH_SALT', '/j<pa1sCT,!Noh)na C_;zm}32Xt7_]Eb3GISzp~>.@Z$,/Cj0K:-&#XL<XqQDS@' );
define( 'LOGGED_IN_SALT',   '7[k0P*HGvpA [$LYl+gN6<_)p_#}5v&2E7vNW?QLVG|)*P=LqPrf^!&OqUrW*{Qk' );
define( 'NONCE_SALT',       'DI2vTf(4>%t{ML]]o9N^ax5%YYGQ}]!^9.(*LdvR6do*ztM-Y<U1e[9^7/HO $v ' );

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
