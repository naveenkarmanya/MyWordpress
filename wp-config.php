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
define('AUTH_KEY',         'sr4RemE)U6q(Uk}HUK>#@.Cq7+Ux!1DV$;K[{e3S-BbG|{FfbvmzW_QN/}[Atv[<');
define('SECURE_AUTH_KEY',  'W.4[ssqEC,xb+;{XHD!Htse!!K3dR:JmNh++>B{4,n8%NXN&|!j@-GmDpH#,btZ+');
define('LOGGED_IN_KEY',    ':Un|^UlgS$N3$sC9c8Q.3?zyB>@ Q$9Ji}$P7$rCmI!W[uO#W!gse ]-bIexmlw7');
define('NONCE_KEY',        '3fI$znqCY)}H-k~uZ+Ch]S?LcfS7MR8k@u6S)YSa2dSiQ6ZpXhHedhY89>%dYSwN');
define('AUTH_SALT',        '4ZB~X|,T4cCk1k%VlVsr.1on8s`gR+i/ s|D#w_Cmme4|U8hD*,*wTNRgtoP^*Xf');
define('SECURE_AUTH_SALT', '(lelovify`K-]0G9kVLraQ^6v=cWcrT)V2D&=~OzWns,@v:UsW]S?nYs[Jp0g7CC');
define('LOGGED_IN_SALT',   'WF[BHI];/IAL_[M?<0L+z]3/J&+H+D4^#_L~QmdI!J(8Q?uRhT9aA:Dk8o}z+/]:');
define('NONCE_SALT',       'NL!TR,+,Ef^wL!cgCa4y|*a;col `(S/UQ;Y[Rjg=yYiFZz4P% %X7Tkl !!l12E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wordpress';

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
