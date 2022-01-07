<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'pasal_wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@sal100' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UeEwHhA1q1OvWKNQX2V5Qu0WjigzkElIBcCPwbl4bhTEMTkMXu2WB6AAqnZQTJTx');
define('SECURE_AUTH_KEY',  'mDtgtONpjb1S3g3CGzWQxf0rnncpQ8bgqz60sI8iHdINU3pQIT04GM1iDM53P7Wp');
define('LOGGED_IN_KEY',    'vahjiW727TbXItSTSJSzs6lzJWqQaBzUWWKVD81CUwpcGE3NbwUQGTtJVEGZJXqN');
define('NONCE_KEY',        'LvSPRXVL6CG8mPAWDDIT2CMPVnq7Nuy4TclTrl0uXpTNzCnD3divjIdvvJjJiH5y');
define('AUTH_SALT',        'vK6OMGGXtwECJNGlkUneJixeAWaJacUgskJZPzbHaLHI2u3RdXQE9vMNPHg7fd5L');
define('SECURE_AUTH_SALT', 'yju2UnT5vlpDvkf9imvGOePIT8IjUgcH3Pw5G2SN7Fzyk0ZrXKj7w9L9aBlWSlVy');
define('LOGGED_IN_SALT',   'FJvyUUQY2SIIUbdOVbfwTdwCf0E6kw68pHYdlec2TSn9LX4GRBXIUZfFQy2WWaYg');
define('NONCE_SALT',       '8EFpSScumr2pp6xhDJmi2FD80mmReXdeEzvLu9leDEbm2icHFxSCR3EGsM2rCZXj');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
