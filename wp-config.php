<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tectus');

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
define('AUTH_KEY',         'OR/gZKb!/^G-Y}TghJn,iAW+5s=d|JP]g9~3*~-0km%v9/Qwjh/DY:#y|#qm`G+N');
define('SECURE_AUTH_KEY',  'BPYz+NJ0s@-yrnGEE4+mBbELOxUq`VQC+u-/~;F2B&-?AQ5tZ7}>sE!-jZ$>Y_8{');
define('LOGGED_IN_KEY',    'rD49? Wk@u:raUD@99K)F^v%5<yP+-?@+|wag+T]kJYc:eC@]dWvV,<J.YM!w4&!');
define('NONCE_KEY',        'xB<NlQ.RnD/,zAJ5v5,L)}Q|>P$iQ(Op#sj~|bf}#q+h@^Z1CB,(d|ypy PQ5x|i');
define('AUTH_SALT',        '+0&(V}OnOM]3,@FuPNT!uV@b,_J2MFgxzgh<57pZXL5t|3q/R?q6aeBRjO-Xh>9D');
define('SECURE_AUTH_SALT', ')kF?Z5.1,?}Aj5ymD6<3BZ)QCwy dm+*Mv1*^<^ic^>Ey/LaYqS<8T|;%ih*19.%');
define('LOGGED_IN_SALT',   'IB#zXUJh+;9u}Gxn`vglSeD?sB#4kt5 R-hz+uAjoI|t%q:9|0)/<4ApbEPUqEyx');
define('NONCE_SALT',       '|.VBtq$7oECI0O-)wRHH/8QWGPgepmu{$lV3+V3Uq(P(g{dz.F2tuc+5a]+w):4J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tec_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
