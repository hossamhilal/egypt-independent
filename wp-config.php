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
define( 'DB_NAME', 'egyptNews' );

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
define( 'AUTH_KEY',         'e85~tL+]Y>;idzA!yK`TnWx!5UFh{rcD Gyy1er},r>G!_(Q&/h~*LO&1ag=h,)W' );
define( 'SECURE_AUTH_KEY',  'X(!XksMSCR>}fY7V.j|zudIO]5<aW <0f4XLR,#$>j6g?&Rnzv9f>&_r:6vhDebF' );
define( 'LOGGED_IN_KEY',    'S_AaF4cF`*xDelW5rD>t=,D5N2`P+T:Q<hHqFvd?3baCiW4pzUC?dGb|cMzF,!+W' );
define( 'NONCE_KEY',        '+$>QsF`?4 lvC{5F%6FJqF,%,HQ|n})<8p]tR)T)Qkd_s|k>Pn=ZXd!QV*h)EA$}' );
define( 'AUTH_SALT',        '#l6,lH{78T=]n$&.ZS.z)goo5_Q;0bSGf9:ek0,D&=V(x-@IK7tA.zLdV)W|EueK' );
define( 'SECURE_AUTH_SALT', '/C6++2wHjj}H(UMCS@KNB|&*HNcGYI6x[RX{~a_Pv^GV-m.aMytmVKm;`bKy~5*j' );
define( 'LOGGED_IN_SALT',   '!lG,i/?ckvm~^{Yi_SUB>h`9 6HP^JpOH]BVt7YtJnw6{9k.4d|>FA#}8(s`3(ps' );
define( 'NONCE_SALT',       'GrUCQ[N|K.3?7s|Wi33rSS<u?x>xxJX}Qg|<}k=`Ft?v3Q?(85}WJ(:fFiLft^tS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
