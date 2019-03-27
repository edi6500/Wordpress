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
define('DB_NAME', 'webedrismhedris');

/** MySQL database username */
define('DB_USER', 'webedrismhedris');

/** MySQL database password */
define('DB_PASSWORD', '1369edriS');

/** MySQL hostname */
define('DB_HOST', 'webedrismhedris.mysql.db');

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
define('AUTH_KEY',         'fii3b:!$))KtllzS|Hwro ]M!gc_2n_l5gc&rw1G&E_LCutcCG^j|.q&qq3`rB#r');
define('SECURE_AUTH_KEY',  '#*qGgT@gK81R;(S#IX/+M9;C]u3:-;)Gfd~D+K;9rwXBk`^y=l)wq@m6g@4G=JsC');
define('LOGGED_IN_KEY',    'hb>[$0kHv[E5McF{~!`a9*I7jrAT^7IB@YP<Qz?3QV=#v:KdF,BwXP*]us:.vH`D');
define('NONCE_KEY',        'w>6 q%{rfkw?]l*x77?:}ZW[J&6WvSCkFV<7b<u3& K]BJcM%n%OfP`X>w- K;)6');
define('AUTH_SALT',        'Q;h o: &bg{)(Rof@_lD%77=uKV^@fk{Tybwj|=PF^=iD:Y#G0sj[h+q#kgIE)|$');
define('SECURE_AUTH_SALT', 'M:k~7M2::M_rbfcJ:N6kMUJvDnTIMIxI~W@bP2 gbjugofE-Gne %?(b_-ilQ`X.');
define('LOGGED_IN_SALT',   '#[VrP?[FO32G]EL.n[:[Z};||g+23O`R>TkGPMr@Fj.d:t|BHV.2dwVdOV<s82k@');
define('NONCE_SALT',       '0ks34ek;(}@|XVA%.pvCk^fpULun=ctxd6^NhI`M%5.+-0STqxo6R9yv-[{)9lj|');

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
