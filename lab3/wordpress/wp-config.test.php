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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '7xyGQ9tl8zCM' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '2kmB{-p@]`mC:w;;:Y`bp_Kw{Z_j@P8@%$L$5ig>o:1o(|p,XAs-CS]1uD3,BuCx');
define('SECURE_AUTH_KEY',  '/5t6-S?GUSFB3kP;uHo78B@V;Ce<rcpY%#t|$|f~gq|1_Et&25bF:+_D?je^,i}o');
define('LOGGED_IN_KEY',    'u_f6%@G#, +u`P+L |+S:~*Bny9i_u7M6<uA#2Ng{lh|tSm^KRFyHHRsXnWbgaHA');
define('NONCE_KEY',        '*Z&kBd2+=7AB5ZQ3KS>M](2Soht:#<rlU^gpAXi.Ec-t9*ImJ7]kN&vWT{{|Rm/D');
define('AUTH_SALT',        'b-mX[=cZ81QJy65<+R,5>-+,?t]@GW]28lOjDDdgY;U!ev!Cox_3:C(K/: ] 9V/');
define('SECURE_AUTH_SALT', '{Qay?YC-t1Aw[sp7#8qPEJH]9_sL6;^hJN XtH]&e!C%1_G36 ra}Cj^E,Y9`*]K');
define('LOGGED_IN_SALT',   'xUMvn#Pa5&%o+fK-_X9upB%Rh8x`8DqwFM/B0DJPlu%V/(;FP,B|3-8E.bn-,{t2');
define('NONCE_SALT',       'A4h%R;4`[-7k>M}w{#6Qj=:1eqz_LU^h`e|`CYJx(ul(,-mVn,+:xG?_msqZR_;!');

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
