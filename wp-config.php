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
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Yj02&9J<I +,U__(F8!=iwqxDYS|)ft&Ou3LzvCZmvul@[QnFp_^.@APO7!i{elG');
define('SECURE_AUTH_KEY',  'wKv^{L29U9Y#(8T;gWY}>~}CLY2LH&A^6v)@+{~qX?PM2vj]j-9m]v-Mutt8[7*_');
define('LOGGED_IN_KEY',    ']S&[oMH|=O|jF9L]nO|WFvF1i&(=8yK=~d:E`z?^ uo<fR.a5C6Q~==Xtczf2E~{');
define('NONCE_KEY',        '<!8<7AIF`oiB;aD*<700I{)eQ <qFmq7epywB7pLCG$eIc+%u/[m}[w)]W)$n5}p');
define('AUTH_SALT',        'T;@g(_2L%]HSaEcuE~R7weps4QFnFEFI{8s:IrzlR=zIc&hS`q={~}c-TQ>BZ*V>');
define('SECURE_AUTH_SALT', '7/UbAPqlA]e*HmT@UkC0~sVd*]/&oiu,)?,4/!p#LA9TybkI.u~JNO5N?BGo[5~a');
define('LOGGED_IN_SALT',   'Dkytp|,-t))_f*)BCjo5.56h,q=)t86Lh~0md_gI`fsf& MJkYv^wyty@X!`O%#*');
define('NONCE_SALT',       'WZYE%Ubj+7-wDwWL&QWqKKP-fpmJakaZXh~[een]B,%)}^Ei4`Y0hxR)_*sS6#:>');

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

