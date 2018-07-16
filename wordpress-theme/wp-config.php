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
define('DB_NAME', 'tweenhills');

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
define('AUTH_KEY',         'x$lKt&*;8D?a0zSdgLr6rtl<`n<JmHM&[sUj+dUt$VG+242c>1#40_Y,6k_]IJ&W');
define('SECURE_AUTH_KEY',  'b{Nd}vs4uUMhbL!}^kB*+*,Jp|qwzYC;xG.w{2%s28s%jgV[Y=?MOHr=5~F#ODol');
define('LOGGED_IN_KEY',    'RNh|E{l2>kKYrJO>2_pGY0v&Dsufy5a{xk+UK=%A3dHu!nn,Sd{cnuNnT|BzB_YX');
define('NONCE_KEY',        'Dm7%)GBfy9lM.|PNouqNU-Esp1_W->-,2]% IF{Jl(>&zI?PxP^K=MykUp0}nRgn');
define('AUTH_SALT',        'Y}#.B2NC3eTZ^#5`t<XUFb#NJw1vkeFr_3YHYIG][8lsP*>{fa._)bpZ,1GXGBDT');
define('SECURE_AUTH_SALT', 'xO9)LVq0L`vJdN1<I~y|pRooljGpdVnG[7[;WZ`q^Q_S^8Y&o!M)g)~_YhG11}y&');
define('LOGGED_IN_SALT',   'VKu}fh|Q$lkkgQ;QNZaI`1z5V/xr7e!a-=SFB1`Sgi.W3H}x=D-i)m![D]m619lw');
define('NONCE_SALT',       ',P)QKFw>;EbZFlZy#jd[zi.ga6H*%=d/.Vntl48$j=Bjj{t19ZsD3D.Hn/UnZM`t');

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

/* Remove br tags from contact form 7 */

define ('WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
