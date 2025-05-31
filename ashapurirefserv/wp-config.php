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
define( 'DB_NAME', 'ashapurirefserv' );

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
define( 'AUTH_KEY',         'Dxt12bczfSTK=-|2WeuOq#R 9u}^]?&@Guu:Fn~aZw?E2kH}ivr~B)n7CY1<z$Mu' );
define( 'SECURE_AUTH_KEY',  'VMsPv&1n Z2nkPg}Te;BbO^xRL$7gBguVZW<MLl0|dG(Z56;AQbEKlv=]*;^PJ;~' );
define( 'LOGGED_IN_KEY',    '7yAF2XQz(@OV*a9;OPn.-l@98[u=y#_gb&CWQP*?#Sf(ZAok[`R>[[[w#&A]1~YO' );
define( 'NONCE_KEY',        'L>h%P%ds8cggq!CxWa=Nq~6hX(z$SA;m6%mrxDsUK[BYfEDn#53?iX%^c_`$Z|Qx' );
define( 'AUTH_SALT',        '~|D!y)u!(1OCavLzC1B9Z=v-1x1Q|3)CUBX6.)_uz9):RHy77olnhcKkS];K3+tP' );
define( 'SECURE_AUTH_SALT', 'SV6TBivEirQYJkpN`kk(U>MTa,4OdxcDt>lVS802u1iq7=.vbD?g83q]%ob0B1Z)' );
define( 'LOGGED_IN_SALT',   't;@}t}UJ)1kayQ|GWnO>qR[{<g$y3>k#a@t?G<c)[5k@Auw|.2pi94JeKm_g2F> ' );
define( 'NONCE_SALT',       '#v*N=hn&Wb=r9vq(DUW*Lwq[{kB@j@DP-d.M :N)V`=jkeHPv6`jDcm 7O/5NvGU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
