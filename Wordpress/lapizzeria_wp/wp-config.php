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
define('DB_NAME', 'lapizzeria_wp');

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
define('AUTH_KEY',         'qF|$s[)4RkD6Ad,tl1[$c!>TqzmMSYK3CD+yeG|]YmFl9lEL[crx}[Y_G$2]H8a;');
define('SECURE_AUTH_KEY',  '[vTix!+eT-2YBIsW[rR}1+;Kc}x7z!`,:$Z5k~9+W2os&]k<bJTZDdlYAnWhGoct');
define('LOGGED_IN_KEY',    'C *`aJW[inb3X0z>yE+|}@PZ.W;oUPqm}:ig`#JVrCgFR~p4&{WUMZ*PVZn4tPfN');
define('NONCE_KEY',        '21_)lhD|1J} qEAaoHj^%O;35KE*O`PtCNvLOuz0+i;>4H`a0s?8mM^GXt0EW1!u');
define('AUTH_SALT',        'e:u2kQ];j=dml1f_<I-sVF_zir)&)FXnkSk6A3v{Nyo3`hLL!d oc(|)XRNmyDdW');
define('SECURE_AUTH_SALT', 'bHJ;PNImQ2X_P_COsQ4HL3i pe6_f3`~$Sk[0isj6];~;]$.7<(}PZH(mCo+{;.[');
define('LOGGED_IN_SALT',   'Z(Ycq8xe>xOKilFXT/OD%I@=F}UV5D,)>A%h7`y2>/|=4LFb/a9pi-Z 1 ?@Fu;S');
define('NONCE_SALT',       'lS[0:1$/QrP-Y|r!bhxf2w]U.p+|;>L]JJ#5PqE3BcR`@0h_3XAP2NFKFwBGhf_i');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
