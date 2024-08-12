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
define( 'DB_NAME', 'mongohubwordpress' );

/** Database username */
define( 'DB_USER', 'dbmasteruser' );

/** Database password */
define( 'DB_PASSWORD', 'LQoQOf,rGWF(t4cTY_#$:~MN]Tg_3P2l' );

/** Database hostname */
define( 'DB_HOST', 'ls-7bcc7548e50a485f2ab5723ea516e656b27044db.cdcgamaes6s7.ap-southeast-1.rds.amazonaws.com' );



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
define( 'AUTH_KEY',         'kDMUj]H]Pze)h<udhvwu4%4S8e]NHY75MmmP9Q5MWky/65Mp-32mX|S3Ztx&eh~.' );
define( 'SECURE_AUTH_KEY',  '.)#issJHVO/@m,9T2vxm6u>Q~rYQWfh3hl4F~&$RER>pJ{JxvuEhCH0hd;Vk3~k&' );
define( 'LOGGED_IN_KEY',    '#aOspt^:|XY-OStw4GS.pF49n{6(L6j.* 087%/izJ;=P:?=]<68|(@ES<%*Yzi' );
define( 'NONCE_KEY',        'K+((aCBp!5?iqeFV9tKRy8#<~ _H8_6V5*$DW_/c@GNuun1LEg+MR~Hv+43We>0' );
define( 'AUTH_SALT',        'Wztq[(v YZP6[ok!&lxyJ-e6G^#;<Ux+-zZ6upM).%dTj]v<2Gr$07 Dl)r@+G' );
define( 'SECURE_AUTH_SALT', 'AO>IC2_!/ZO!A0rqdes/MUr<?fFMzP(iL$GDoad G!uS$h6RN1</<c5?qxL9Wca' );
define( 'LOGGED_IN_SALT',   'u_RWcP52VVOVrqx4?~pOu:=FE!R65y[WtTq01qH5II;Iq3iXc(Cp_upBE.yc8e' );
define( 'NONCE_SALT',       'VlopEnCV654>8i [hS@N$Jy^%s]q..qJC$.%a>7.2!_sQcWvG[<_Dcr3upmL^Qw' );

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
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';