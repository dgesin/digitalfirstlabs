<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'MOjito428');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Bj|eu4+=|lcFh(6#(U)9m3pn&^eHB=w/6[R+*b0EK3Xb=+9[&c*BlXlIQMZeQB*U');
define('SECURE_AUTH_KEY',  ';mBQ83A!LCgv~Ah!_^x5/4!Bf:*^nqhxZ%S6r?n:cJmpf*toGKc%r9P6sigHJGd*');
define('LOGGED_IN_KEY',    '%2YkUWAT^a^-zl2epzME/=U;oDw>z_b&QmMC#Ge6~1xv,U;4O`}D8gIw<yVSw54@');
define('NONCE_KEY',        '^;+)y2mGUZ,T]&u^z1[+$,2cK+I(&PPdg8)f&FrkzC4fJ;s<[O_KN#E|CaSv]P^{');
define('AUTH_SALT',        '>_,Q;)CpLpeF;Iud5|Yk;0}:l%58#k 4H276$*Ap c4vO&DKOs/^f^fiF/a91p[3');
define('SECURE_AUTH_SALT', 'YSMR$]jIsFJ}G*v_onfv/@7X*X#i+jcBH~ova<8:WdBYCp-dNM]eJ2OLm0pywK6{');
define('LOGGED_IN_SALT',   'I8S+C/q*{S{xiI9+ECznI#t(?F?*B!`6L gumhX-jgyQ)h91;w%J(J&slRqN:7:(');
define('NONCE_SALT',       'me O7i|S^>V.smh9u8Yz&ClQFZ$L}<[N<4n]=oG` gLyDbZjd`*bw{L<R>(!4PTp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dfl';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
