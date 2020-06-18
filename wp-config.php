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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6135380_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6135380_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U.TAx2rRBU3PCT7JvPT66' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NylwkQv19EqYr9sgcgzaSVKw67nTI5VUEgt7DtzGF1tFv6KeuxbyYmwo5bV7zZSq');
define('SECURE_AUTH_KEY',  'VmChL17vPmLLtMgmAzVtXLrfGy30ktd24aC49XdGMnUXDMg7WuEjDiEmqDYjPxf4');
define('LOGGED_IN_KEY',    'VwVr3lUaFxgegxKfYA3QzN0kbO6wd6nfaRi2bJfIlre2tCl3ZN1vY8URzEcjrzzc');
define('NONCE_KEY',        'rwSmXVZ9xQmBmjBLGkhY0KNb1W64VuNOvtxnCUirFJMTHf93E7ZSi5Bfl8zhBeKA');
define('AUTH_SALT',        'idC6blsWM3JID8lQTnlgcMlVOPMAV9pwqHpgYlhFt8erRfBwjlL1KihYsn21sZgR');
define('SECURE_AUTH_SALT', 's6iJJV0vZnyODNltVLTWjoN3hHH6QvowOuPRPoP1VI60diHBpJ2LxZWqeaFF3yMx');
define('LOGGED_IN_SALT',   'NBgB40FqZ7eFz9Rj6XZWHMcu0OuEWaHRrWe2tETUYcgGjkVWWUdlaqeS2HtwpQJF');
define('NONCE_SALT',       '5Cn8AJLRCkLq0lrqKCAdTpdEiHc1myHi9B3pCrXcMFsvJtW9b0VhcW1IZIIoT0N6');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';