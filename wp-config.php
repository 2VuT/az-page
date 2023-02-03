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
define( 'DB_NAME', 'az_soft' );

/** Database username */
define( 'DB_USER', 'azsoft' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

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
define( 'AUTH_KEY',         '{K10 Br(_`8&-*36:d1&xY ,@1O+0/^W;1$0ya_.:,GQR%>hwTM%LiJS,mb X&H1' );
define( 'SECURE_AUTH_KEY',  '*)g50Y?N#,#DcE4zGwVU`tumOK)uryh4<@Sk9=H^MGz@|M |1Vz@eDtG52W!PfwF' );
define( 'LOGGED_IN_KEY',    'D6k1E6*61OJ|0!EM;.{QqoK9]Y^zAaMm bE>.//`l.9{E6`$#BWTa?[P.Jvi3*:/' );
define( 'NONCE_KEY',        'dijcdvN+9/-V6?6]+iltVL_Q#ypn!JG?W.e}y,$R%M*o/j8/_Coim(l QN5jwK0W' );
define( 'AUTH_SALT',        'tY:8(s5&v{d%oTlbP[MU68ethV4wv>&}AEGxXsRRhn;$TI{EF?&j7Io*AsaH0t@<' );
define( 'SECURE_AUTH_SALT', 'B<9D/B~1lm]%BrNZ;_)<Jaj3Gq*x96uPrG~1Q3[AOfDMPIe|mNZ8OsOGH.U:0^~t' );
define( 'LOGGED_IN_SALT',   ';ziA+/RSeMXCSQy.o`-P#V>mMS`)(IOSO3OI[d(ek6ZAuVnl]U)oE.}yp4nfdB/!' );
define( 'NONCE_SALT',       '6K2>J$w4CBkN)dz`y`ia2iO8oT;FR-jZ*$8Z*Zu[WBfm=R$5N=eY.pePA8;^n_-0' );

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
