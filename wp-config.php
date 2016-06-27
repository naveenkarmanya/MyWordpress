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
define('DB_USER', 'naveen');

/** MySQL database password */
define('DB_PASSWORD', 'naveen999');

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
define('AUTH_KEY',         'fTJiL|Se(<c2U 6x*$D!7L1<z@+>#u;U]Bf+~g=CAd:X+{|{0&%n>]j=4N,IHPKH');
define('SECURE_AUTH_KEY',  'pwU`|N KX`kh,NW,ST5:?rY^RMA>t{@j~cmqSVvZ-XAA-t+IXsn}<RaoX4w3|~J|');
define('LOGGED_IN_KEY',    'Aj4Z;:x0~Im&>ElS(8XM!B+f+UpX|}0LCeSo~SHz,o?GD3W*y|WR^Yzj-D7,k@1s');
define('NONCE_KEY',        '.[8i`BB_MEP+=r3%NX!n8wa _-|Y{U,O-+ydCjK_/N|VP;/-=PSg^BFmq`z^A?4Z');
define('AUTH_SALT',        'cbwXj}8U;AeR`?P(p.SmMt#zolkz67ipyY4`i5[0:5oYo~x}3%P!#~]A|y;{aZpi');
define('SECURE_AUTH_SALT', '=&mU[<g}a(uej1J4G|!!A^+sK&ku>e|nE7p:o}iCjd|M]+eho@!N98;V1Kewj~o?');
define('LOGGED_IN_SALT',   '#A[A8/o|h,ZPKyZ]|[foIm#EU>oWCpChqR!%>2FJV4X_`yT*L/~SmvmU?5pvZ{rz');
define('NONCE_SALT',       'R|^^3b%^5rJHR_n5S1s9j2oRj|+m!hA.7J]nz6=4!`=/S|E:SW<]q$KoA zYS~GN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mywp';

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
