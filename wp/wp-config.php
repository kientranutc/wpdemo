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
define('DB_NAME', 'wpdb');

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
define('AUTH_KEY',         '_67:]4]*CJ%2Fn[ypz>;lZH$Kg9nHS2W]sJ,eT4>&BJ47;bIrZy)g|*5~V &Wa4}');
define('SECURE_AUTH_KEY',  'yj2R`M]7c,B`6(WEXwz2WDU$[E?0P?>;_.6oLqpmW,@pk ,8V;J9},t[N2?j4FdU');
define('LOGGED_IN_KEY',    'baE1B@xcP[3(jMP8aO5t*-dTk*5h}3Z{RbBIZ7+ahn/qTgF^-&;n(+QMF<|igqzS');
define('NONCE_KEY',        'B.H=ZtIo/ncIjICLRKT|~,#&qT$$<u[:~98[vGE.#h|hFQb~:jiQ}1XQ,$IA<02!');
define('AUTH_SALT',        ')X85Vh2Fl=D|!jD3-|:Un+yq^a:]}tzU5v-@}tg-cJJdvC($cPwd-r|W{j5h]Dq/');
define('SECURE_AUTH_SALT', 'y|TZ4,ScSrOV)n7`I [{ysE8E,R{).38Co;,Q:w*R)fxASg6&mIVJq@E;BFA%r^d');
define('LOGGED_IN_SALT',   '}.[`H` #ehWX&LD`37(bKc( T1@|6>KJQf%e-m pF$(},]tmTAN&U aE%d1_:x6`');
define('NONCE_SALT',       'eYtvc5w{%)$ugun{RlUhA^19sn*M}<)X|}>0_o:sT}yB#)3PGl;~Aw1B_H!=PnpB');

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
