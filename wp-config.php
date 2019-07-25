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
define( 'DB_NAME', 'bd_omtour' );

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
define( 'AUTH_KEY',         '~F:T*^IP#ldT28fGu_{c88N|S<Y@oe($n/~YaFQsMd+{i9%q5gs/(a@nwG>E2ggA' );
define( 'SECURE_AUTH_KEY',  'uing0hlM20>Y{U6VJaVGk[ej..AHM,!a?~Qs;nsr{clB[rDcGk&Sb;ICR`aVSnwt' );
define( 'LOGGED_IN_KEY',    ':::;vlLWHj>xdsL)t.4oe}iYzKYB9|u{H+{9,x/8a7pvINd}`?nTs1WN_j2rO^az' );
define( 'NONCE_KEY',        '?`*y 65wg:1/Ut<Y9=~@9bBO|%WbG>eh!nHQZZ#%{}[Izp:?Z%`^ew|1&6:xPvBD' );
define( 'AUTH_SALT',        'mlzZ~*]Fy7TRsJ^NLi24J2t2-KUlaK6P;q_;b;)D^>L?oFX[M!SmfbG-oxNKsDO:' );
define( 'SECURE_AUTH_SALT', '}oFMDF&mAnL)5BQtrbMTl9]~bv$L}qJF2U7*qVJc1pD-yV-&m3/emX:3-b0s?z`K' );
define( 'LOGGED_IN_SALT',   '@8e#k~r;hX`Ii!{p6li(AA*!>[9q.N<@ZS;PEEtHxPX0uXV9;9u(>j6t6BbxITz;' );
define( 'NONCE_SALT',       'T+f83RHXKPSt*Zo9uUGy3K}+h$UCi}GJ-Y^Gqg;93{a)5`_X=P>sEc2u`6YCtHEy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpom_';

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
