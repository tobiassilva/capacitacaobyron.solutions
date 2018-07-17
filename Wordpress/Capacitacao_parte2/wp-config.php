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
define('DB_NAME', 'capacitacao');

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
define('AUTH_KEY',         'RTd;;~QJ4hdKJBh08Bo!J|N-g$([;ky|3Rd$brazTV!4u [f0/=o/`B<zJ#M*%=`');
define('SECURE_AUTH_KEY',  '>wTW%./K((r}a`L h}1oG`yJ+DzM/(A ~Ohp&&?L2-`Qkj1hLF~+.g.*qf`XpeHB');
define('LOGGED_IN_KEY',    '<(=Q5,Ki>wK#@y8}~qYm.l.ZOsgfa7r- 3bb!] x9BKZ3i$-qqP$rzJ(qV,DeFkU');
define('NONCE_KEY',        '~355T<<,KdRUA($75k|3Q2ojFzxJy}>f.@9HEP5hHiXa/<[[h1$IE](A*6D,&rP@');
define('AUTH_SALT',        '`6hvp;Hz;?3jK{(`HiSE9*K!Snm+P[dH0f|T2C2mvtgdApZDNg6ot}kM$3,3:wqW');
define('SECURE_AUTH_SALT', 'C$^zYtRyo^ZQkcgqPfJiE?kekOHDV%]Ui6Cz44BN6jbmz(y[EP#r`Nm]=8A~;^# ');
define('LOGGED_IN_SALT',   'KE_F.e^FuBbZZc>QFzQ~5C/+):pW&f-.g/:--*4sS(CjcCBSnHf.ZLdAT]z^(b.x');
define('NONCE_SALT',       '5X7S#%%zU9WZSs*ClHIfgq}c1#/w_i8LTt0slHZ-uAuI]O7_++J50hpEQ@{NZ55q');

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
