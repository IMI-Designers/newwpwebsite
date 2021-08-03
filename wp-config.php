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
define( 'DB_NAME', 'newwpwebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'k,y,nM}wV(nr#H,uy(|dnt_OvS[vCU=g0yE/|P4t8n{;O<,W?:f5&#]#9<Zy`J.5' );
define( 'SECURE_AUTH_KEY',  'qV2kOL{|VCPnh>{p0Ke|Nvg5#!B9[-5r51l,G9HR~GG,^/sh+j1]U&czV9LrMPF0' );
define( 'LOGGED_IN_KEY',    'GJ=CnpEvTHm*XNA8%ic$D}:hra*z(1hU*X4p{a,$DK LV>B,rR_)E_hB;c$-Xs*c' );
define( 'NONCE_KEY',        'e8*O;1ySAjFL*cb7*uL>V3Z4dP@htn8_1*,-o/^~X QS*pF.JgYz A2vX<-(iu#g' );
define( 'AUTH_SALT',        '-IsNCT~NptP%JedTN:%HP{!I34$|)v$-CX@^6Tep04]EC~`J4[VzXo. bsNfhjhQ' );
define( 'SECURE_AUTH_SALT', 'Z</}y!;/X=9s0at-g<[f+~C)O)E]d0(`pNb-AGY=i@D,AsaPtY[2X}<R$:*]Mjp-' );
define( 'LOGGED_IN_SALT',   'n}6pJutcqd((>!nn+40;pF1_0Ftw&5:zXG:BJGsg={Pe{bLK?KCuNN+fZ90oE e6' );
define( 'NONCE_SALT',       '`<UF`I67(eQ<5LrHgOp}D,.wquXX>f!z<[aOP94b=k6OHRMZ=?q3Lmwu,,YB{%]o' );

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
