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
define('DB_NAME', 'db_auviet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Q1Vg]1j8OZ/=>}1_%<VNGI%%`E.Xz_3peE3mdWARX1Pl:4;=)U4b; 0z(*^ROVO{');
define('SECURE_AUTH_KEY',  'hcHKlmUkh-Ws fr4gYJf@X`,.WQlSY%djB~i6[|l9daE+QV}Yu6-C{+f1*Aru0w(');
define('LOGGED_IN_KEY',    'x.`x~Q#>m*omqO&H6t)[}ML=P2i*_&9AnV)$;V{>iwasW<!{,b&pb7,9UF{axzYJ');
define('NONCE_KEY',        ',&L;Z!d$}13;GSr!X{lX4DY;xEP];ree~H!uU`> ,XIfm}~kLdb`Zg=z(F|xs|sd');
define('AUTH_SALT',        '-(UiX*`%Oqic/Iq-Q{K8y#C4I6q*6%/ VX4~&LU<Nod/uk%^!,T{^0nh+ -DPARX');
define('SECURE_AUTH_SALT', 'G(F1-O9%7I.$hTAo)J>xXKk8[]$zdY9w}$U3>Nj;W Cdq@VF:}uzT+;;fUOg~##S');
define('LOGGED_IN_SALT',   '+ioS[~|G*r$HvQP9jY7s+T~ :8<FcT@wF>gc$~ we.<|,#MvmBm[WlpFe6]fOw!V');
define('NONCE_SALT',       'i@y~+Hjr;`<itf1:3+xWbSt3|2pZ@%}9O GKtm-RfF+qR8?|7+^`v2E&Fo`$]8V.');

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
