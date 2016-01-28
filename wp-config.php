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
define('DB_NAME', 'bimpies_john');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=(g2XL8LKq>!]7(CximBMj<h{nd?C-T;HmIG~Pf#K`f)P)wWbz|LfB,ELOVznJZF');
define('SECURE_AUTH_KEY',  'o2LVIrfA3E2]wHO!ldEBFDO,nxtac~5Sqis|0nk}NontiL`T7zDkuh,h%Rr]L39~');
define('LOGGED_IN_KEY',    '_vSp&q-s&54p32cA++|w[(8^|yA@ACu]zh^>sN$t;V >C-`Q,6`YW/+*R0T0qj~+');
define('NONCE_KEY',        '5w>a)gK%-!&aAV0Me)8z^=X!@*:#Q_t:_qw;0pthcNG2!B!PRda$|LnFng8i  !K');
define('AUTH_SALT',        '8e|0Q[<>bPnii[nb?EnlE8Q/|_5}=^pn[oIJ)6l1m[c2(Kj%:(7a?Fff[ C-w^v`');
define('SECURE_AUTH_SALT', 'Jm[?YB1{M?CmVu4p]nl%.M47XnZlKR:YeB7yi$AUBvM{iQ~xQE0y63MR.sT52}zt');
define('LOGGED_IN_SALT',   'AZKM,Qk=ue{#w RU;~;zhscROD,Rlq^Z{>KG[uxn+1wtT*)uQ/Yu}Z_ElI(PIww6');
define('NONCE_SALT',       'l-.|~PEMlj!w>wT/NJ.U.ECzi:Pk_d i)@[@gVG#Y=hyVYD|,pYm;LI ,7,~rt:}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bmp_';

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
