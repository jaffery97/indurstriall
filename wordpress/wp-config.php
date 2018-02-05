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
define('DB_NAME', 'edchat');

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
define('AUTH_KEY',         '9=JJ+.>r$@s)-+3_iE[2{5r16:b!|bUQhH?[LlVbN9bZ-pIV._cseD&uRtd/q6dI');
define('SECURE_AUTH_KEY',  'rGl0lv?oqLkfHn)Cf%Hk>BvboNR)ys@l;bap%ThU`D.^%OJsL9g@?Sjse=7o7_<#');
define('LOGGED_IN_KEY',    '<P=1+nmYWgdHhQ#6#O 6w}Y^.HH)GI*@`yn3v}0pAuxBv|9@c;JN-ZWW[=S1w|E7');
define('NONCE_KEY',        'ET(v&*b`33`cBX{ZGGiQ6]-LO[1/v T~`Iue~K?}~qN23@w]Aeb6`ZsNy^b$bGH#');
define('AUTH_SALT',        'DlbP5B{ g4[!]Juae.CJ)>ff@6mYpP`~])@+bz[,WGaY@p]u;|a1F&q=nv~;DB7o');
define('SECURE_AUTH_SALT', 'u&;?w01;E&Y)NQ8.zU8vo3E2BHl{SqJRj%6DFv-1R[SB[N-O;D;X7Hx]vu>kbVoG');
define('LOGGED_IN_SALT',   ';B8S,~!7^L$nG@mEL*MS>oIv:fOUeK!,Z}6cP,O}dr;$wxE1Xha3`u*@6vHWTn([');
define('NONCE_SALT',       '8!rLk9Kfby(:GA`d>m}ZGfW|otaVdI|`23w2pJyfB q_zqWj:/|}@^?`,c~nsAu$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
