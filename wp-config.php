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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a660228a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';)ctM=2.q%yotlO%j0GJJgd5g8;--+myEG)KC!M{4h(d*7+iH)xv:0:r4`Wv!_yT');
define('SECURE_AUTH_KEY',  'Lz}n+lh!UFD8`;%L_vNR`!;/o8(K-ckWky19_je_%q!6Q_&?zQqSBV$Yzw^U~7C/');
define('LOGGED_IN_KEY',    '0s|@X0Y:X-%P#Pd2t6.?OOdFK<$/#9_AG4cA>BP_@oUoH0U{C.h_}`T}1qtTj ;I');
define('NONCE_KEY',        'V:w|5J<H:8rLT0=i_gHj(eX7)SJ>#gyKygjV@oQgq? <&&SxZ[Qq!I$KX@`R4Kps');
define('AUTH_SALT',        'Gm+8DfF%_-0w3T%Q}f& 5V^PFdgK_oL$>ON/n)|qC3H,/j%aB4t g)yr3?{^Vojr');
define('SECURE_AUTH_SALT', 'e48%[>b/74$0wN }fT#@jLL(DdcC~ncE5ntERzz?Ne>R[.Bn Hx=S}E*VQDI2?bh');
define('LOGGED_IN_SALT',   'NU?&:))mO_kMmngP_<,>Q@^=yJC:[SC/f3  |Q.=acico,,nM|?=i?(lQ$p (G6 ');
define('NONCE_SALT',       '`BBG<4e$0FB+j,$w#@:M&Axy[)?`Wr:EOz:vF5}e3JR+t(AEE4O]Z3Kh;ggO=1gr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FORCE_SSL_ADMIN', true);
