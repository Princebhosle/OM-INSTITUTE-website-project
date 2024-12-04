<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kb' );

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
define( 'AUTH_KEY',         '7.zv!uRnUg=]6Bdpvv0RDRIUJBAf^l(MU7/Ox#@a5$EemjFBlWrkX%c|vA9A)Maq' );
define( 'SECURE_AUTH_KEY',  '8FF+O4 9q?11p%7[-FWizCq4yxyQ!/,[?|(H/G,197R1*hEi$z+YB}0*8[D +H%W' );
define( 'LOGGED_IN_KEY',    'DwC>a;q;fmo|/kjb|3F&Um`W<@ub4(c[CF:vJ-u5*zlU(2EH< ~B1= %L<|Kf(5Q' );
define( 'NONCE_KEY',        'NS%^v*Ta6;uyR{H1&9Nw2/ee!R+~=[ &^Y|r?P2>.zR5ror6h1DTEba)a0o m-N,' );
define( 'AUTH_SALT',        'hMz:c<0ffRlU;YPU?3NQI95GacRBcHct>Z_mn`;%E**[fg.Oe}8bb&~T(btt.Uk%' );
define( 'SECURE_AUTH_SALT', 'Q9,DsMg9@[G]Qdd {K~A*&(5(i.BPy0{Q1T1yT9Kt~IN}~^_o?|^,)?FEyMWnNX8' );
define( 'LOGGED_IN_SALT',   'eCg)I:;Ag*%>T_S[hQ*$Nmj#;v-<0<i_hc0)fYqw<$XzPmN<OMUhilA_iR7wN^ +' );
define( 'NONCE_SALT',       'ul7Cr->~sa]R[8mX A_?;K+VcB^V?=,9Kz/q(nDU=aqHqz9<=];Cv=+aTbedrzs`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
