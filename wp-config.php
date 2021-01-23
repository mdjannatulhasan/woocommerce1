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
define( 'DB_NAME', 'woocom1' );

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
define( 'AUTH_KEY',         'MxL|X6$#F_;NT4oGnJ RMs8OH/#i+O!^9W k7Oah@zjvCk6WQd:IrIs5TL<5c#W$' );
define( 'SECURE_AUTH_KEY',  'aob1DsvU$Bt.8lwu-0-,hk}nNLs}q~@#<I6s3zA^|i#<hB{68id%3B?T!5K49Nu:' );
define( 'LOGGED_IN_KEY',    '|N14a~c$m4*.CGfRb_rL6s{yYE&i./mjL$RZom4,7E8LkVKyEwu1w@o<qX8o)c7p' );
define( 'NONCE_KEY',        'He@lOjw!B-G$vm;cw6%#hg?(SZ~:&GqvY^UGO77I~]3(68k?u!!!n5FPSg|sxd4O' );
define( 'AUTH_SALT',        '-s.JuA2&H?:B:X8u[U3n9VFQns*zR}( +d!;+w&gz$sM+t+@*11-O W:|,ujYb#2' );
define( 'SECURE_AUTH_SALT', '#PFNtdy?QK+EFIk)XFNVV[P-kJKe60R{GL3 _)B9R%O:f&{_)<O}Gtjy 6Q}?G#p' );
define( 'LOGGED_IN_SALT',   'm`]&gc^5i|l&dRf6>#hFN6E2]F9tu(z=_V,%gOX7ArVcftq;F5|{J-Q+zB2rKBkY' );
define( 'NONCE_SALT',       'g$9nXDl+(rm;$#)ZzhigN!)9?PaXK$y?fP>s:kXX|+n8{ptqjq=?W[rx0l-u?^D;' );

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
