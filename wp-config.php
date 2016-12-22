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
define('DB_NAME', 'tp_wp_az');

/** MySQL database username */
define('DB_USER', 'marco');

/** MySQL database password */
define('DB_PASSWORD', 'glopglop');

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
define('AUTH_KEY',         'e0x52!aes}({.O0pA/wQnM<`qm@S=ue_]:Xq/3wsO;niPyuamMQZHmc<iSe?<v@b');
define('SECURE_AUTH_KEY',  '-|/ %$T),UJh8YGRbSH[i]{73SN?|,D=(0evQrv+Kz@=tTeqj.~-fV4+>5Ac3~*}');
define('LOGGED_IN_KEY',    'P4?4~XnXSje<:BZ|3C5>U^}[>}skfrY7wZ%p|TWj$eXPq+IKv7o<]ap}0XH+&0O_');
define('NONCE_KEY',        '2!.v*p~ov~OX@k#=9O|=ViQ$zF!fJ*@N{[LynpfwY}`3;0./@ ?U9@;+ZKWrhF(p');
define('AUTH_SALT',        '_ 9 ee){kO6_tl|~}3jH:Kk$T=[?|U[-%uR@M8VKeN_e^&)UkG;vdrTTT|TGuk{a');
define('SECURE_AUTH_SALT', 'zBD+a71L!{(AV;!9SQwceinhkoagOr0LRzUe&KZ/v>jH.H.[-<3 q^Kh8uEnk+4o');
define('LOGGED_IN_SALT',   'N4}(IXah.WWB;?V~|c2;HodGrEa|q 9g3l5L.Y7LAD ?Y=c(+JSF})-%2?4P-XRK');
define('NONCE_SALT',       'gl(fb`Ugsj?V8[{RAV2eBuA^_Uikl9M w){`X&cP![E`BDMK$#odrhFs-+:UFcKz');

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
