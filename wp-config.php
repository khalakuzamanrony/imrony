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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         '$+@cm~i6a# ^nbxxE#0qu#h812h$g83.RKG~(+!cl/&$k(J%1?iiq:OR*,{8{EA/' );
define( 'SECURE_AUTH_KEY',  'uic;b5dU1TcFBS!<C+r!=wsKyj@o%lOI-$jc.d9Ay52o!2a}:2JXG2.4EKlKBP2f' );
define( 'LOGGED_IN_KEY',    't;)]wArQ-l#~sx]RbTN=K|bm7RK56*mb=EdJCH,CYDmr{8Knh!R#f85,U6JRBe(v' );
define( 'NONCE_KEY',        'cEv#wPM QTRC*K=[3t=+(hpiR&Qvpn@=vx(uA:8Eg:.IJ#*(M!w`$>.s~;;f88Ri' );
define( 'AUTH_SALT',        '[# #^cR}Zza-ADIBE.yNQEdC>0ds*Yyo[tb3lUj6%ykNYx~(jp;i5,XBb~RE{J~j' );
define( 'SECURE_AUTH_SALT', 'YXHU~J;K|,&?0&[BYQ}RdKyV#6Ki+y]T`ryF.IwSWl=4Xc0;-:X `#;tsg/p0;<n' );
define( 'LOGGED_IN_SALT',   'X>.AgFZI^u3Q4xf[]a)3[sG3&%0I2dL7+A+@^ZPlF8:^ENmR,/{*W?KMcK!c#</]' );
define( 'NONCE_SALT',       '2VHcKSGU)Rm1_Sy_fT>7Y]<0hFn fW|byOm?~QuNz)J64`&3!afdhi+}jmkt|KjA' );

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
