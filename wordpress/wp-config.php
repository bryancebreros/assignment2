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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'bryan' );

/** Database password */
define( 'DB_PASSWORD', 'bryan123' );

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
define( 'AUTH_KEY',         'C2.>QO5/|N^$mN^,+v`S.K>rsSc6NKQm,(G>iRdK2&O&K<c4mimQcQ)u29azIR[9' );
define( 'SECURE_AUTH_KEY',  'ldN,zpOhlV_m[O<~w9CDp%[Otf2n=%M=rTju5?[CCBvAbMO&1a2h.v)GOl3~/<Z7' );
define( 'LOGGED_IN_KEY',    'lC(fb1al4dmR& ~L%)*<LQ8)c~q@%Ss~u`/hVBN7h>,@2Yp_P`g^K;?-Cu1a,8)F' );
define( 'NONCE_KEY',        'Dc@Nk,6T^^[QQ/J5LQ~t}D|7}lN`2Qg>LK9s]RLAVC?Er#n!w3X+`WeC{$vt+p:1' );
define( 'AUTH_SALT',        'W{xKYtsA Md?C7W|wJ=e|ZwCn/]zBA)yZ^!KS$-9W?~T+K[aM<(NSSjy:hI0Wa<K' );
define( 'SECURE_AUTH_SALT', ' UQlpXFj^V)8SY+St{7L9%0_d8S#sl+/*I&vr3mU1MMYq~mEzLC$k;M|mjUG@2SV' );
define( 'LOGGED_IN_SALT',   'D/qdRv[?8k(Eb3QGD9V-QWJcS4wl90/-TZj+Q?ZBcu`#Al8]ZMQu`Py^;zPAWe7e' );
define( 'NONCE_SALT',       '9hXb;!N%W>Sj]!!J`.+R#4!zm%(c@/X2lc56=>qTs+m*{z;Ux51:X4zHqB~o=8q}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
