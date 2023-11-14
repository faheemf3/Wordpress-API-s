<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ikonic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         't6h8tRXephrE4peDSpM5TYWtbkcj05VMd4hOvlHTJIZZ8gquojsc1rWNaiRWdRZl' );
define( 'SECURE_AUTH_KEY',  'BwFAv0itXgJ2c7cd1LMFwffyK4mO540NokyZzHS3rGyenPomeubrkXkUA89TYfqa' );
define( 'LOGGED_IN_KEY',    '7mdEyvMvr9buWpvj81IRd4LxX4VJV12jiSLQJgbL8wI3j7PPkGVbqdWV6i23Za0r' );
define( 'NONCE_KEY',        '1gJ5U2kwZStdemyPu0Ha4g3ySqNEfmCWAksUWd0FXvsgUvRpGqY3O3SSfk1eb3es' );
define( 'AUTH_SALT',        '80bhbBH2PSdwK44rcuZWZAug6MZCFRtKy5dAlv0WB3mdQANrwpW5XXeDOksTYhjb' );
define( 'SECURE_AUTH_SALT', 'vFn4EmOd686Bpup4v7IE7TFODepdHZFmOGBnVjGbfrrK7NJrRc6UoM6fkLSSfjtV' );
define( 'LOGGED_IN_SALT',   'JANKSBG6O6yKSP6vZGmmbNJtHnUrZBTydpu6atrGYuzHCEkFwVKzsnxpuT2c4R6E' );
define( 'NONCE_SALT',       'CWnTtpgnDPhqvME4WOEPk307gnOQNs9ZikEEJmeJK3DDSAkpSu3dFBr2N6a7hANy' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
