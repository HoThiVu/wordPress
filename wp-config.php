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
define( 'DB_NAME', 'learningwordpress' );

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
define( 'AUTH_KEY',         ';DD9/!mvx22[=UjG%~F%lcecL%L;#bW&x{1+`!x_$^12;35XV:9ZX3E7i,?;)O5e' );
define( 'SECURE_AUTH_KEY',  'nPBDbv*ScFeE~K^ n^XsFHH>k#)h}_W-A)jHb#i*M%VYQtCVjuV[eMOABD_K5O::' );
define( 'LOGGED_IN_KEY',    '^rUG++H2YVe_hX(-_O]KoY*xTXo=u<Hy>(v9VrhE=`S{|!|?qQ#:k,qB(tjL^r3s' );
define( 'NONCE_KEY',        '-@Nj.13+xso5]W=[r),pvw+J4vkG;b.^#OSb!KVP&1U,X>1s9Edwsg1,k^C9w%`P' );
define( 'AUTH_SALT',        'R fsJ$dHb^k*?;2AH<>9*R<L1rvo$UYc*1`y-IHY?-`fc(v6E@o>4]#@A^AKl#az' );
define( 'SECURE_AUTH_SALT', 'Nr`q@H@Tc=]5~t52On/ii/POC(=B1b95SR#* @$~37U6zO<{^aG:pR) KQ&$c6 |' );
define( 'LOGGED_IN_SALT',   '%Nu:>[+R<}I#[AhX2o]K.^fXJ*Crsq`jH7fic}(@0P()HyC{(gdl&*{(mSn/uP/c' );
define( 'NONCE_SALT',       'M&-Gsa+QQQ)dj_*.aCG}3j.FE>8E50 4,KQhz}4oSwMu4YvS2$96L$?yH $t@uP,' );

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
