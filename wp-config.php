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
define( 'DB_NAME', 'ukrhat0_db' );

/** Database username */
define( 'DB_USER', 'ukrhat0_db' );

/** Database password */
define( 'DB_PASSWORD', 'sbFLmcD6' );

/** Database hostname */
define( 'DB_HOST', 'ukrhat0.mysql.tools' );

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
define( 'AUTH_KEY',         '#TXtzK#MVm}3ywp~ -tx$L(SL.$lN([WUx`l QQ&nC-EhnG[V5N1ck?yXR{}>1u7' );
define( 'SECURE_AUTH_KEY',  'd.k*dSb*#xf$9l:N4m W*o*/sJfOrg84wU[%`HX[np7VrUlM=ho:.2dBT47ibtAK' );
define( 'LOGGED_IN_KEY',    't00 P})?@oo_,y[.#Zyi|m>qWfBOIKc#x]$axMsZa1s#dIO(LBX9)*2)^k}t}._A' );
define( 'NONCE_KEY',        'T8B^o)3*L:$^QILrXhb!*M)4;F^Ia;.KZH[X(]nMNCFl#-R0A>Fo7?QJUSR:pIXh' );
define( 'AUTH_SALT',        'A-j)oo)$S9+Cqx8Lx*T{7o%utZ.pmV5BOB?EGt,CHMmX (&g`yLE>u;wEu4cjGd7' );
define( 'SECURE_AUTH_SALT', '[jSIDIfsb{(ren%ET6-KY:Ms{!!&}bMTC<7haG6YaQ:LbJ~|BC%YBuytt6*I!PKs' );
define( 'LOGGED_IN_SALT',   '*iN0TUbC=W5Zl>V2yS)41;up8)6GXybI8cUAHSv}4(}<vd  zcy>[:^{-ossX6. ' );
define( 'NONCE_SALT',       'SLR;SR^4uQKoxX0y]t/Josp{plFx1eg`5%*z:db-SF~Zm!g8+?DrFZKL4obMc)X+' );

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
