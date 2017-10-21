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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'userblackdog');

/** MySQL database password */
define('DB_PASSWORD', '4nFcu5LZRc6x4cGt');

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


define('AUTH_KEY',         'oXqvz(]&nGS-QPt/r.V6~v,B{f|65s-: }m/}[ratBBo$eazZ;N3WVvyXK(K@GJo');
define('SECURE_AUTH_KEY',  '8:IUE ZS|cz/|{udd9DBG{IQJ|(PJN-N8>d-%uoA{UMcx64+T-<%^B;PtAq]+iN}');
define('LOGGED_IN_KEY',    'MI@lK|^SA<Nw-l^Vf0uZD17 s25L||Bvvp7:2CW]{XpE6]8:5ewjLoc;@*H`9}8?');
define('NONCE_KEY',        'b{|zd:TB bKF+/F+<i07bElRIeUB _v-!ce%D? ^6qdnw]:-o9ZG9f,#/%XW6k9i');
define('AUTH_SALT',        'sb^%PV.=-;z>pW7M %r=-E)q0GSQJOL?oG&f9);4sp!-/NPWq5$&VsK+pUUd:c{$');
define('SECURE_AUTH_SALT', '4-p}ca1R-gmtlKpQ*xYepHNa1( Z~sXfak/Ohfv!;DW1q+]iqa&o33i9Nd?]Q8jv');
define('LOGGED_IN_SALT',   '0!s.#.dLtl~WOaC1+]{#fF2B~7(|1)zV8pCS}n5kO5(2qyCZQ3Z++(!ylZP]HHNT');
define('NONCE_SALT',       'tNa(Z5x &D4MtKGN-q)1}hEz;H1?r;Y+q3Vq||n$92BP|FfS-QHnP- rg^T6 {T{');


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
