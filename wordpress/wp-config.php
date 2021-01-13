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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scenictreefarm' );

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
define( 'AUTH_KEY',         '#>~cL{oQMZe|95Uyp0d[LkmK:UWWHb7q])$xT1{^js;g0Vv]|to@AYSfi,QfX66n' );
define( 'SECURE_AUTH_KEY',  '#<64kg_xbC-!5fW]l*=N6^SU6wW9TGo7-GNHjZkK@nX7{|H]JIvJA7aHWyePDpX<' );
define( 'LOGGED_IN_KEY',    '?}mm*mKq-)1tAHBzT`0eY4dI18BI2U%CQH-m&@l%z<+GCwrj0u4%kR+->X948m`+' );
define( 'NONCE_KEY',        'qxl6~8u!NZyM#MwbIRCr mX_;xn>s*d]f=R:&e;+~fAlO@%UmXI5cWpo8+%=- ,+' );
define( 'AUTH_SALT',        'c(]vxuqvkZzu^mDRSu<z96cxM/[CC.-!kS&x{-w%@5Rx]M!bgC[)Pr>bB$OvmR8[' );
define( 'SECURE_AUTH_SALT', ')V5A]@mZfjLL[KL{I{n*fz3FQ{+rp^Q~!jd UDD7,.B|36?$o2`% 2E=r6,2bHx/' );
define( 'LOGGED_IN_SALT',   'Wl8n>;x!8~uU!?$N7Osda$x#S*pz-9(sj/W9D2#t|N)!$SpG>O{>$;`YD<tlXUND' );
define( 'NONCE_SALT',       'E{3>8hW0QeSGW`^cCYchESqeS&t_X*:>ff Kh$+SPq=#xzQN:Tq7H SPWy{m[z_C' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
