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
define( 'DB_NAME', 'my_webdb' );

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
define( 'AUTH_KEY',         '[z[ &-pa(*0G4QI[f>u%>2 z59m=X*G!G2(cmFVs?4>udJ9{yM6IP26gnv=hOJ!m' );
define( 'SECURE_AUTH_KEY',  '^{U$iFUBuRh^Ro%Ju.}T3Sa+w;n?7K]!r2Rsmf7OWX*2f-.6jnT!OYXbZK4=clBh' );
define( 'LOGGED_IN_KEY',    'vx{L#iBE8,u#An:b3ywf 6BtnCorES&LDI9HVq^jBVXYT`mnRQD$4K6| a-8(pI1' );
define( 'NONCE_KEY',        'ejW_P*mhl)cUck+lEF-Oq?@GsU >z8HQiP+F~J>FoDeeIo^Qso Z]*+MG*aL!%9)' );
define( 'AUTH_SALT',        'ZZrSqt)( `LK:FH-G)pKH]ZT#,BA#vvDAO0T):v,>9-d-{nC&+ZPE:q?!V)RcTCq' );
define( 'SECURE_AUTH_SALT', 'fhwdEoSh[$o3AiJ[<!t@?_qFqG_jD b5AO#^+?^CSjy6-rGl;Pt,lG|/:#K/`}ID' );
define( 'LOGGED_IN_SALT',   'l4a_E?~36tpu3wj*iFhAqYE[<T;R)d$[$/r#ULVDSCv=;lo4}c/p(8grT~KA|<Hj' );
define( 'NONCE_SALT',       'yrQcK>iaKCm+^8QpC*2IS5|/{y}HY:xJzCr0~kM2}8joO&]t9a.5=/ yZi?0&0Z`' );

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
