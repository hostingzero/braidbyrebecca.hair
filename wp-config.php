<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_s06bV' );

/** Database username */
define( 'DB_USER', 'u756016664_pP6Ls' );

/** Database password */
define( 'DB_PASSWORD', 'W3aePWoCLp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '}RV78;}yN:_4h-&NwefykSLs*Bt0a+970bE]Pc8 Nc=dtwW@HL+*V:G_2c(4~?}c' );
define( 'SECURE_AUTH_KEY',   '_&`89RE-,)4wPa55.IlME{Z|=BM/9w`(ClE.`&B[n0v}X$P.E%q)$;ey-[5I&~-`' );
define( 'LOGGED_IN_KEY',     '451^:Q^?O)41!js>C4lTrM!&b-UCxApA4}@gwAq1{6J?=Mu M/VH8kM_;Ib`L*Hk' );
define( 'NONCE_KEY',         '1tJ_G^#R9m1?heG)2c`$.}-YkH5~ 31&H:$|mBV(W^W@Zqw[!8KQBM92 peg/>N@' );
define( 'AUTH_SALT',         'o:8{zThG~+ #.FdJ@)p7m<H(!&<NL22WG0&$[_igPW2OPl-rJ!bfP80Q*bx.P/~F' );
define( 'SECURE_AUTH_SALT',  'FpbeSo9n[w#K#a8K4uOzOq74I6!J`XaQ>]^=Gk$Af)Uq#(1*<2^Bxru)5t9N/&yW' );
define( 'LOGGED_IN_SALT',    '@q-)C!bUvP27ZEa#tu!?UE6@EeaZ?5m +,W-![;aE-`#=m@yqOq1p(!s+ECSgVDB' );
define( 'NONCE_SALT',        '0OM>5lixG|p`+{]pL&8YlR0rwV)cgX.Z(`fXjo^dHAt&Em,cZ-6c)3^y:fT$!F^6' );
define( 'WP_CACHE_KEY_SALT', '`rJp*MohWCf4-q=9nesZ0F+84XUGAZQh?864?-N@Z^|vQ:Wpm<zcE[NjiDPOS4}@' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
