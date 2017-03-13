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
define('DB_NAME', 'wp1');

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
define('AUTH_KEY',         'i*hp%zmxM#Ye #5<Up@wjWc:3WH$1A~;aCu|6{E5gdU:I2U%|tnBvCX%2$[Y=t3:');
define('SECURE_AUTH_KEY',  ' mEW3X9g4f{gK%FBeam?DpOy^_y;b:.eo:#:I}a;$cIj8O2*bMvk<bnXTbi~6q^j');
define('LOGGED_IN_KEY',    '7zrnS8gv9-| ELdd:cnal(s`0>UE^Dy$,.}:%7(;]y_A|4AWEp:;OQdEh|eT2[lH');
define('NONCE_KEY',        'l3 o;!ew{Skxy D3`CZf%U[bw>DzQz|qgV,G3T{;+k^cWBb-uF&F$ygn`S[FFn5n');
define('AUTH_SALT',        'rogEj=)gU9W8-ST1fGtX)n}&0gC+9Bx SD[fD[Mh-|9wnWMji,Oa8q2HkPI9]lY}');
define('SECURE_AUTH_SALT', 'xU7xqwC$=q~j2NixBqhyA$n/iW:xQ^+e>9~^!Q6v-|.x+vxQRleSyW8E(+9OD>>w');
define('LOGGED_IN_SALT',   '>1Mepn#w2$NEr!Kk9Ysj_wpG;c0| 0h dO;@i!FD1m?=K5i[Ch&e2JJvd|tJ|)6]');
define('NONCE_SALT',       '>ns#q8s~6KNM|CTvwNf^,Cf4!5c^iE6+n=JF.Fv% gBKTNtm@@eJ:eZO$(.bEsf-');

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
