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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'B[Ec-+U=5YLled{Z[d7EAPG`f#k=92an88oK,;P.N%GFR=hdj/yVP<hyq{H,>?Ad');
define('SECURE_AUTH_KEY',  '$wu234Vk*3I:!p}N1dDg]q([KnD9[*sewY8Ujr sGN^pgU]IX_5ViM`g7ZPyo-we');
define('LOGGED_IN_KEY',    'd)]T:V[cfy)VXn)HvDh*&8CS@dXC <JvP$@ca^oO-IsqQ9#Ao}-xf^IOx.;^%7rb');
define('NONCE_KEY',        '+<]/b0`)xMP1v#j>YXdMpeyTPPa2HKKZ314+oP6xT:BwkQ9]g]xCQqv6UED48HVE');
define('AUTH_SALT',        '}el=Trd_g`&l|~)idE1)W0e6tf6 H,x<F&dS_[tb(uKD]}{pO;OO<8lCQMltEXT*');
define('SECURE_AUTH_SALT', 'JrplXJ*CRV;Ti-C{E(OVJQKM{{|Tb01,Os2i(2l^|]JrdbQz:2sv/</*${nu10*w');
define('LOGGED_IN_SALT',   'A`N#}Y~yLd0x,s7=YPJ{=LD~Aa$i+/U~sfz?hb@o Jfo7~B;2>DdSVd|r3*w$KUn');
define('NONCE_SALT',       '9oEJ }Vud/A3t!X&C{V-U{oMOzfr78};n2TZ; H0K|{<jA=*NK59N:x/-^,>N}Gf');

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
