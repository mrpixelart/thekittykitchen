<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'mitcbrru_tkk');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|>Ouh,CyHIlk+b.Hw-QK+^96<owd@f<lg]#N&Hu#|GP72h1rdPf9w]H`pLC;@j;r');
define('SECURE_AUTH_KEY',  '|90 bep/v~m9L6qX=6~<Tb)vIG&mr,kSj0ni[Zvei:3HABY|ov^!uA+(np.-Aexe');
define('LOGGED_IN_KEY',    '(Zq}+Qn;- sTMupwfAKLaSf-6^5cl8t{;#}(?G<:R[7Qh[hCK/m%6Qi-CuF1Zl/6');
define('NONCE_KEY',        'Q>CbZ^]-xFtsPlqW_QXn-7v,lE7XsZ|--[Lf-x<6D4Bn~vhgE|%wB!!KZyv8Z6l[');
define('AUTH_SALT',        'o/};Oi8.d-DO *qk{4<EOw1 8yd+-A-CY|_)&C;{WT42X/Yp5QpxX`;+>;el.V,|');
define('SECURE_AUTH_SALT', '#;71fcB|NEHO|~H=R[X5D,*L_A&5l1;^@W|Uult#VVz6UiG|5m}c,mkS]z5^(Kii');
define('LOGGED_IN_SALT',   'NUP5$b^u5V ,-%jJVoscy${Q1ln)-?l+|QG<%7x `Sv9-(.r? ~C|O)m+#pH2[x4');
define('NONCE_SALT',       '&*D_7B]RR^~Ax?QN<p^41:AiB|YD3@Q=z%OEi[K#Se_y%Kl=fm&$% U%4xW)|9Xq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
