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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloth' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J~#bvZ37Rham1lWzM[3r,~J&^(`;_~:y/}<)gmu4F}.X|dWE=5O2O6Q=Emc0zu;M' );
define( 'SECURE_AUTH_KEY',  'NN2rD]gJaX?uCC[p!!6_m4hGRO,&6e8Rze!ssZ!Q`L=S:0!oUs2)Y?eKo*2XF<fe' );
define( 'LOGGED_IN_KEY',    'BG4KGUj]1)9jd&AZ*/{Ia@_wYI]3I`78KV $cXgU h:E]U~moA<btYR.lVpF{`]=' );
define( 'NONCE_KEY',        'DL*j#!YK1vfl &xLVAb2^+R9yNpjC_wQhTN[NEB7QQow3Ayj#R*a-ZG`ArE1-0J*' );
define( 'AUTH_SALT',        '+`,I#1L9yKTt#?OwE)*dMJi,dc?Rz&a7}>Jc!|@I[fe6w(dmUHJUVY`zCjy,$3A|' );
define( 'SECURE_AUTH_SALT', 'KCM*)l1rVi6(qhOdj_-B[~&7[X4KW| j&S${X<({$r:miKx*d@Rq(9{p_T9P5h]B' );
define( 'LOGGED_IN_SALT',   '2Y K03l^|{#9MdyXJ1ZR(G.bA/B-H# Y|f6<ccu>E3|>O<gRbAVl-Nb qOh3E#[,' );
define( 'NONCE_SALT',       'fs*5&Cz1vvl -fF;djhM_were/TRDLogw_.$!D7~#e vJ[sP&:]ea,qjJc[t(}rm' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
