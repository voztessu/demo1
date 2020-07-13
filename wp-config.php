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
define( 'DB_NAME', 'fashion' );

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
define( 'AUTH_KEY',         'xFw?_d7*?oV:/3cd%3^6Em;pf`NxRbk8!/f*Z/m9#0*QabK;YnoLN@K9d0P(S5L:' );
define( 'SECURE_AUTH_KEY',  'AGHtCklr-&g7:wsF^2,+>IPj#AzQkAJxK5.$)4ul$>;oEanD*B8xd_O1?Hq^6)@I' );
define( 'LOGGED_IN_KEY',    'IlrmA;)@]/!HK;e+MQk{f6|n^((=vy%{q` JSc+Hd,:/y=_q@|YrH3[+]#_Fn&4#' );
define( 'NONCE_KEY',        't3~#E?xTRXKSur~b:9#LVnC/Qq>WsB8llStNyg9T9l%3K)nc<QOc&Z8$n$,`$Ux8' );
define( 'AUTH_SALT',        'U pXwoeusgg$g<OxxHbhZA>[^W>LhYq$U2lyb(eESi94Q.faxYU(+2bmb).93kPw' );
define( 'SECURE_AUTH_SALT', 'er`}M!w/U h@NC|Z+1-DF*KEy@~tPP8$)U:Rpr(>+TJ}/`F]f)KX36hgN@vmNsQP' );
define( 'LOGGED_IN_SALT',   ',Se<j+v.EDe..fBTzCh!%;B-(.MJ4*bmq)OZVBqvpO$/D$9bKhWXd`MdNn-i|?7Y' );
define( 'NONCE_SALT',       'X#>Ib}#h!A]>q&v~/ADflm.(ohVsQm^u[,B/`[MX/Y<FE8).kKy9j`Y`bXuBzCyG' );

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
