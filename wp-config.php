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
define( 'DB_NAME', 'kukodein-betterlaundry' );

/** Database username */
define( 'DB_USER', 'kukodein-betterlaundry' );

/** Database password */
define( 'DB_PASSWORD', 'Ng2pO4wgmGu2zjl8uhqO' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',          '^LxfLG;uej_v=[<iCQ<:7V }Q=q`o}mHhjiJ7u5UXKqX)4)=ylJlE+vBDhQj#R3V' );
define( 'SECURE_AUTH_KEY',   'c>g$fHnD47:mLKAw7j?iMe7g;]q{$RXO1vmgs 7(ja(~sKp-~sa{<1oR`1q4b?/I' );
define( 'LOGGED_IN_KEY',     'ebcRF>#/N?d~)AVS_UW>BY9S?@_n2d4uHa(.`hugGarCHfkhjM#0s&M2J/q$8-.6' );
define( 'NONCE_KEY',         '`&T&wa+V!CG;F/CgnGNYkAo(Dy&*F/#as#{O*Iisl*[xQ)FoD9Wm-_k$`fL5wSAz' );
define( 'AUTH_SALT',         'I9mnM2DJc_#j,#T:@N)tG*-Ufu!JgC?n>Ot/!! :($9<aKvARfZWKm(H>k7)xt^D' );
define( 'SECURE_AUTH_SALT',  '=C,0xXlK 79{cEcvHBN2S p6E30T:V~Qhm]e90-0(G/!AVa7HIQ1VfR?oWR+!COY' );
define( 'LOGGED_IN_SALT',    '~sKZ{H2Ope(by[z+&UL!P*hP{I,~ bS@B_M^;u-ZH(.VAL;a>VV2Yrx.zu7[Wy2^' );
define( 'NONCE_SALT',        'ojXMJTldI^k+vDXx}lWz@c%ecI4e#a)~d?a@ +|;k<D@<~+F)5T-zfDk%W[Ph!`w' );
define( 'WP_CACHE_KEY_SALT', '}dVznD-eQ]E`dK@Q:p`K|VEhCHCw//ZSWC*L;W?^~LfS|?T]|]D=rZ@/Yg-2Yp_o' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
