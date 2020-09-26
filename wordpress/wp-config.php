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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$gd-f<iwWu+IC?$?(4Yoz}.]sa+~BUqq*)bc4/1e^|`yWSKEZ0<e0u0T9.qg+G[c');
define('SECURE_AUTH_KEY',  '?+P1wg+-/9$<[*5?Lp1@z&,{h)USFn~w.ehLe()SnyT6ddfNW9bWdh*|p-mIlayp');
define('LOGGED_IN_KEY',    'hf-Ud*)+r+kRx^z}Bx}`Vkt%^-rQrdGEkx|Cw C~M8jjUJTjphVc9/D#=|BAl,D7');
define('NONCE_KEY',        'c&k5|.F9h:)a7Yfe7[RaZm|{9/XCS3CWpZ}%JGGkQ{Ed8~ 6/FXM,O+Mn;f^e5|O');
define('AUTH_SALT',        '[ROJow>_}G@&B]G,2i!ob$yyH239vU%11T>{[@D%I!dnd7-0w+HJ1-sZ-X!Kt^wD');
define('SECURE_AUTH_SALT', 'ud0H&9~y98-l-+#^:}CIvj70gtH~VtTg%inKy7JyzHZbSDH+%TIE+Xo-NTz061%x');
define('LOGGED_IN_SALT',   ' ,;t=IfVbm5sSxh8|8!>|#&6(7@x)ssoFCOtG4~TDGzN~26aZGg%63|x2$fPXE~/');
define('NONCE_SALT',       'mWUgH;-_CLmyFOVz^Z_5z^,:(Gw j(ADc6H_P]FS-hr1~|&++%edrr#Q<+8v6AK+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
