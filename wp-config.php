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
define( 'DB_NAME', 'marta' );

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
define( 'AUTH_KEY',         'wCt&V$*#:1F9jh`Zr[CzWg)jvi?b.H!tjvkq*)UO2M**H./TO.Q%6E!nbwbdmeTD' );
define( 'SECURE_AUTH_KEY',  'D,^4?tJm#[QQYo.Mgh0-EvU_~?gK PvTbiG[Sqp1_*0CC:gn&VN%hvYwq@4wJ3:$' );
define( 'LOGGED_IN_KEY',    'Z;1Oi6/ABH}YGRSzO+vB?r-5@P32|V*P~^T.yJ:V5D%xzQbnkv}oZpp(.^`-N,p?' );
define( 'NONCE_KEY',        'nZ!%;I%nH:Erj(.f@hc6|D,U[2;0#|z+5fpU~d:Y|/I56CILX|Da87a:Vpu9,Vg^' );
define( 'AUTH_SALT',        ';mlW,}&vgXMT4HbE#HT9.a0(I6M:/F&[^dK*2z7azd3NZ)xH~tXbVttMg:)LPugC' );
define( 'SECURE_AUTH_SALT', 'm_qW^^<8[M<BAV%k8%)J~{vQjOTubL F*LHc@y9x*^5t3+b#1ZYDi^73|,[Z[r~K' );
define( 'LOGGED_IN_SALT',   'N1>/az}V%@A*0+4@+K&pL5BVW.d4#&]p_<xj6=>zuDVI~_D[/@ulg( fRLDXBjp]' );
define( 'NONCE_SALT',       'cYa5qo Tib-*ekho<x*Qe.>SDQS`n9I@,0Rt<arzmKPr8mHC7%50@o~;]/Y44V{j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mc_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
