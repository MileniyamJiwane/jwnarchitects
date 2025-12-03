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
define( 'DB_NAME', 'jwnarchitects_db' );

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
define( 'AUTH_KEY',         '/T~cs! 6A,zB,W:Hh|/8F;=.v>59V@m@9>q26Eu:aV,Pe2:1Er7o,su]s+5mf[|=' );
define( 'SECURE_AUTH_KEY',  'WLL:,QdbrW<n/N054j#C:4:w[s2cCj6!U:M4[MF@@V{204 pA>dbM^yxmFu]@JA]' );
define( 'LOGGED_IN_KEY',    'aCU uoVSRL#QgeMnf$0i*gRI#r=E:*k*WU5NVmPQZLkI@N -F]IBOh87Di(SU@To' );
define( 'NONCE_KEY',        'u%5gYBVAkTubG`5QMC&5qdmjfiJ,,K?7n8/s!?n2&)?!2&-!m@PzjZe2Yt.zs^dp' );
define( 'AUTH_SALT',        'uJayP&MlLE#;Om!8ODa+0tI=c0kU3JcIY-UY9EA6aj3A=PeDJsuTk;2x.!kY>xUg' );
define( 'SECURE_AUTH_SALT', ',#qi78S+?d$J0?(C.3qc.Ob-][3J=il!CF:pNg5M8Ydo58a[^Bf6,a^`>EL}`qQF' );
define( 'LOGGED_IN_SALT',   'Mr$ x`z:*8%;053=#))=yNe}:#vwg*uKm2#4<]<,n!NVqq_u>?cmje]}u^-$)@|L' );
define( 'NONCE_SALT',       '}9D-v:M!x1^R> q|umK3YdQ^%-:RUIX7Jd/W9}q%,swc<=3t80Q.AUOCk/a(jF3+' );

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
