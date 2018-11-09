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
define('DB_NAME', 'wrd_3iiblfd57o');

/** MySQL database username */
define('DB_USER', 'wrdC5CWSKhE');

/** MySQL database password */
define('DB_PASSWORD', 'Z80FvwAIiZ');

/** MySQL hostname */
define('DB_HOST', 'rabbitcomru.ipagemysql.com');

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
define('AUTH_KEY',         'xqN3cWZFtqQso5Y4V8RXELONBrWXADbgemu9LcPEfcboaaINic4rIkTPaWNKG02U');
define('SECURE_AUTH_KEY',  'dnh2vf9IAVVfOFJ2WfjTkGW1GNg55m8tD0cluUxu1X0KIZw20lNNrHppo5vE5T4n');
define('LOGGED_IN_KEY',    '7qNSN8U02F5oLmSbGF7udQbFP5sUqmzehl1Nxjf70GtxJuUbf3YmnZt4P1efqAkY');
define('NONCE_KEY',        'yQ0oTiK8q3YbSa2SQMevj2bmeIphhVsu5zauiEo4hyZQmLmv9P1GnzbHYMjgjt64');
define('AUTH_SALT',        'pmYsu2wIg6grpbCv1vfViR9Z04AMDb6j8cx4xvfqtb01N1G7iz5moRJSkxJiR5c8');
define('SECURE_AUTH_SALT', '0gUtSmypeXhdjLgqxkfVyn3HeTfW7vpeyVnNutYQKJKqUXkIZHyyH3MW5tKZI0hd');
define('LOGGED_IN_SALT',   'NrMGjn9jpJoaiEjAkOEuFsHA2Sx1IfDyRXlk4TNHr2YJgWJqjrbJlBUZtKNxu10g');
define('NONCE_SALT',       '0pffrB4M5sQRsDZ4V9OXUBWLfuYm3EjFJeAUkwch3l5MqKA1xsk8GVh3jADJS2wa');

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
