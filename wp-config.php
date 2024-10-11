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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          '-(n{owePU/+BSN>)vye_75ao*)/7jJE:iQPrLDUylPmD}4MDxTz@>6/QD^Y}-&:#' );
define( 'SECURE_AUTH_KEY',   '?Ia>:u?QatO%Gz 5>pVW|?FB(ua%4wI(,_ij|V3(g5XZd;]g}I&.cJI[4u!K12Dc' );
define( 'LOGGED_IN_KEY',     ',F)]ZqjhX%5W`STYfEE:D(a&Q&Uaci,I(J8Ys:~>-c3P<Qur9s+!V8n8!Kgj0x@0' );
define( 'NONCE_KEY',         'y<[@FIE|UF:<!Ns3J{;!@~Eb7p6BM)q9#f1%.5]7m wVf:qNF-,tB)P:9{S]?6sx' );
define( 'AUTH_SALT',         '2eHcqvzW)<dcn^}*%JA:G6lpka/!g+lcmI$AUT5h>.aV*g!z[}W:G0e.fm).n3f{' );
define( 'SECURE_AUTH_SALT',  'w<2$U*Mns4mUuz>:qY= Z#{<}.;m%D-TI_Tm`i|4]q]|.(#DfT5[t4i5u{0]f&xC' );
define( 'LOGGED_IN_SALT',    ';B|a#XV9?wLHwrux*7?&(5<xPOua.E.yCxesfsv4@`7]7+T4i)O1.sOrR<Oe~X%P' );
define( 'NONCE_SALT',        'xeJ3coAn/jAG%:oIw23Xu3?QEbBC:Sf2u5G~?aU?^uf<5+~ $Y;OaNmV`>.!3a5Z' );
define( 'WP_CACHE_KEY_SALT', '/91gZ.&UwpEo~$p0=ZPiUII2[wqwX(moG%djM]D+S1&,k*1)G:bg;V~&6%6Z54y1' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
