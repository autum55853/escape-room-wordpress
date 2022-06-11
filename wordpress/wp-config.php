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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Sc#2z%$R_(5U4U/:]8AA,N#Z2SJ*NShddb-%rRmuYfq4Whr2i{AxCO4a)?dKf1{5' );
define( 'SECURE_AUTH_KEY',  '7ufON^T/Mo}t,.k4TIv3]=P_t*&9Al1d0PeX*ekgP2~He>rVDY}{ 6IlmhOp1d(-' );
define( 'LOGGED_IN_KEY',    '<Kd]Mk49PNw}I6Rm#AN3/4&<da4$v1gDP<kBvN<FeUXd;lsGDcS}_CG2sR)hyXDi' );
define( 'NONCE_KEY',        '^[g3##0%`O-:d!ld)W #Y,J@&qG_:w&])Uj}(Z&B)N+rS8s, stt/~[>DJU~{KT^' );
define( 'AUTH_SALT',        'IzTD`.Evn-^kdtz/(iD&z XWQ0iK5hhjPnvBDh{~LuHJ7NUnRnjh14k%}p`)=@Z]' );
define( 'SECURE_AUTH_SALT', 'J#FpFPfhPePCb6MSl(Uo&Ns]FuV9YiD7Zn?@k:,[m,/8(P9NMw4xjE*NKz31,^,~' );
define( 'LOGGED_IN_SALT',   ',e+oyjOl{.*uwJCp#/#a8L=p[LBx8DBQ-^.cpD8)9Tg@,loAuV)I07y}{xeJ(uq4' );
define( 'NONCE_SALT',       'E)E+,XFMe^ZS$77T0vDg|7DJl8l<6@9x4RL}=B>yZ(}!`+QeKwW2@htnnR3%CG?h' );

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
