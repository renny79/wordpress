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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Di>a&}/=X@Y}xLw3G-rLfwKc,D:+^`5>0]ZB7U57PJHon7I<Azia8?Hd]A-GNX3*');
define('SECURE_AUTH_KEY',  '?=6p]vsEDkN4La6d1MX]u*|?71JzUg@;vPZo|F=w&,vY?h9P[Z8qjB#):V(qOo;Y');
define('LOGGED_IN_KEY',    '6G3X1}{D3Y~}&5%l1-xj0%nN]N-mb]r|.^I|j,(5w8/F2Sd}0(|1_d-sdUD(4)a}');
define('NONCE_KEY',        '=$|3,)SOOys0p[~c7up<$>-V.;?rwI{i{4 jj}<E-n!C <lU]?_WxxkAY^Pch>J!');
define('AUTH_SALT',        'u8L+>K-`WK)`7]-&&B)-G4-hT48)+O:{-.4J/#95KV.Zz0&,[MwLekMO)%VZ#e;g');
define('SECURE_AUTH_SALT', 'VZ 6GMI,[RP{Pw]lwl4CtTt<*Q2!L;@N|4+-GT?o>@nypL5|=g@#+E3c{7++g7yh');
define('LOGGED_IN_SALT',   'Z`@V  )xJsNW2+YtS8l~7oE(&Wupu~bdW=jKQ=kuLP_%Ue<!|Gdwo6m1|AUOQ6Pp');
define('NONCE_SALT',       'y$MTt~Ywr*whmFg>q$fy/*!OckzV-P=E5Y.l{U9Pqww.NT]KW3.n0l)7^jFtUS^I');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
