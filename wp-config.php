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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'Vanya241');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'c{ .bRRD}587+2g:+ptA+9/vgbjT/Y&1Z-UaCBnj.n@7*`!DZY&_cJS3xLsW!E<l');
define('SECURE_AUTH_KEY',  '`clh]A#HGu;9.H8=4@D]tW6N$[!~ 4HVWc*OHcu/*`03Q=@0qZ|E-m6M 6o*->#S');
define('LOGGED_IN_KEY',    '^3X2;|4W|;#|9`i0iE%Vi:wLjsn|-|*@@k42[Qa.J>ynynj3 1Kl<_1x(|O8uh`g');
define('NONCE_KEY',        'njdh#q;A8i d<Dy%_|]@rc61_Z!CMl8niMw7v|.&c&XpxGfrp1I>bnBUZ};>n^7$');
define('AUTH_SALT',        'PE5wEqWfcX+ z8(&d4V4wMGn)F2I4U7PfC5^VP^}Z{MTZ*91u_f(vnb.(!$2(Nj6');
define('SECURE_AUTH_SALT', 'dZ=@p&-]H8*.zNWR1_|UTb/Gykk.xQ2nG<$|-9@XHHg5wAz>^H;#~dOCh.4*~CWJ');
define('LOGGED_IN_SALT',   '!F{m%,O|FY>{5 Iwh*t+1kekj?r-W*b0!-P?le>Qosrw,!kr(|O-GcK,L|LfSggP');
define('NONCE_SALT',       'OjX 7*F!U2l~*>6M]~<@x.SInOs=,9N]aWz6=K%m+Po#l@[ga5Dt=)r$3K=8k!N_');

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
