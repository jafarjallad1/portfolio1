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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
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
define( 'AUTH_KEY',          'URM/Yo>{#;eTyTDl9%*@}.R]=-j3Vn<|3cTVh9mlX+*+rz1&&pE`A58y,FGfsK<^' );
define( 'SECURE_AUTH_KEY',   'sCRgxm/,c~]b&f1fAEC#MW),eO#UDAl!sNAXvz/dDFI&NwXpS-K5/<)9~BU*Ehpu' );
define( 'LOGGED_IN_KEY',     '9b|oj^KL#y-%YV{BY9,1w8*:m_+ 9*CeR#s!DvbYQj~9jwMfY}WQ*U_G0]+GHwuq' );
define( 'NONCE_KEY',         'qum*NZk*)U3TkvRvD<PDLQ,$>!YtHHN1jX6Xme9fTCjwf)MJB&VhpXOv@N_z2xs`' );
define( 'AUTH_SALT',         'Ih3v/4cc#F#Cx3f(e=]@P:g`?S}CI;P6XBb!`GU?Q8gO_.Rj-4J9J)(xeb>+y/pC' );
define( 'SECURE_AUTH_SALT',  '`Qi%Q1m]5fdneB@IZiNL|]1=5)UwxR{uLh*oCtSyZ*7)dA6d`^?,,e/7bU=+[l<O' );
define( 'LOGGED_IN_SALT',    'cMi:GGYSOKcZ)in uj.8RH)qz6I^%}-fxcu!i)3W5r7GbdLz-o5,xU8(B9QSDyOl' );
define( 'NONCE_SALT',        'm$hQn%j}{sRfy/k!^p5?eB6kvszvd?~}>w^iF4?$NcC+%?~~C9$Gq7VG4IJ.: DL' );
define( 'WP_CACHE_KEY_SALT', 'N_9r{ErOPGN{T_k5*TN-pj|T8oylD@NTLwhm rk~-qS|7j&}fsov% Wt+%R4pj0&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
