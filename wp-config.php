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
define( 'DB_NAME', 'az_page' );

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
define( 'AUTH_KEY',         'h-(8o-192Z,TSd.vLX0RdLKoWkW?8;g/Gz,|4Y[!Hu7b[hKs.Zgb=+a]l3O(P0y`' );
define( 'SECURE_AUTH_KEY',  'nK6g(Af8dDINp%uB{]=5t)fx]o$^Y!%u%16*DD$EW y*mql;dJlO*_24y>=$owCc' );
define( 'LOGGED_IN_KEY',    'NI=$O=RueM7X}hnTC0s0/TAh>-Wu/^P0<A{RBJn~$hq XtWYB*7S +7+7sAEzPNS' );
define( 'NONCE_KEY',        'xgR7)~5vKmvdVF<~Fm|zi)M;ikJjSiPNr!df0EPH#s[Bn_!id)p)|8a|QCbYP6E%' );
define( 'AUTH_SALT',        '{x4sLU]f/R2wb[]_3{4KKQekZzof>.2PcxOboXHoEw^O<7g,n(`L086V-O-WC)tW' );
define( 'SECURE_AUTH_SALT', 's_8_i?N/%A8^rTD1OYp~tOVc4?u]rgh.! f2]1b@~>0ty$/n_/Ft+W6^T<rTY-`]' );
define( 'LOGGED_IN_SALT',   'nFyj)k{Of>r#TN4f,/K+]nLEy>+4C}#xX}w>hSOsMr`Oamu|;JjsM`+!0gkXT!g2' );
define( 'NONCE_SALT',       'T9e2IOYq<D55MLWMSv}ydq&g8bW#tcga:zu.Pq4YLH.?0.aEzdcLCGIY[R<;z-7D' );

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
