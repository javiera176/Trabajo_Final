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
define('DB_NAME', 'db_work_final');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'c59<dFA%7|gMI1{0E#@{HR%de^U,i?T/KN3^SR1__}Hr9O`c6=J2f1G^y+G.(uGb');
define('SECURE_AUTH_KEY',  'gJjn<;PWf?}?4%6^2q`:gjQLXU3*ds0z5o|QLc*XU8;&$3qourYiMVJJT@3sOH^E');
define('LOGGED_IN_KEY',    '~^_%#2Q[LTbxrHe.Mg6%yiJBgbly2&:_YKPqd`H6.sYE6E&^.qKO%%kRcOwUn:JP');
define('NONCE_KEY',        '<<H8EFuuFCVgP_o0-RTsy[Xa&S&3^%V^/{+>RanfUeG^Yr huuA5%975O(#}=Ppa');
define('AUTH_SALT',        '5xL!0+-9t7S;gDTE?4<B25C3zV+q+nl?0L,=,<bB2(ZSEPGm =ascR%[F,X*=<ig');
define('SECURE_AUTH_SALT', 'srOVCFQmEZO/#}+c*68-eyWiB^SgQ^{ZYac2unK<g^n%SA-!ZCw9rfm1rtp|MM]-');
define('LOGGED_IN_SALT',   'FnAKL.RnG^,SMC {Pp[|Ra5I~L`laI&,H7r[:=2=&dgY6J@74!TXizTT9kObdGMF');
define('NONCE_SALT',       ';3V nT,vKYE;6K[pcC/`v#5rA%1U3[G%Zj/VgS7G:~+BA7+dIsI=oYQY3a:a)T8{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
