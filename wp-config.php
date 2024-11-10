<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Fuerza-Letal' );

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
define( 'AUTH_KEY',         'tczhVZdWvjsVuDCXk6hEEVyoZHZGUSxzzaZLQGVzgNPIPk8JarcrzeRM66kKt79C' );
define( 'SECURE_AUTH_KEY',  'HKIEum9cv7srt2c9FewsK6ORrqS4b2hwEIxqCh5ANFoTjrGphqJ1qK9lI05qCSXY' );
define( 'LOGGED_IN_KEY',    'rQKX63ohI3y2T9gWfgtIE9fup75JF82AwZ2ktMkNhb0vy68hkFwqBP5BFJwetOYT' );
define( 'NONCE_KEY',        'aGmr3MNUzkQ4c2A6OUzr7hUFx2rncvs8diPfAoyJQM5PHrISqfpA40mQeIbyBaXj' );
define( 'AUTH_SALT',        '53WB07fvsy4KMeMXu2Hd7DXm18u1XBfdA4mLIH8hvWLRGRB2a7XN9ePx89nTOYDA' );
define( 'SECURE_AUTH_SALT', 'jeSI1A6XAlKsHDM27c4wgGJ1uXkYLc5MidsXstNSg8kTbpiciDJXwyc8jIAqRaxg' );
define( 'LOGGED_IN_SALT',   'BEqdp6BzwrOpPuIj2deoprvLDrHCZHAZ4RuHEb2A8rCkQXLsi3zgUdZKQZROfVAi' );
define( 'NONCE_SALT',       'aNzMwaPkkO0hp6twoweT77G0OKhWQN0pytaBiv019upUvzklNB6MWYmT4pK74Kry' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
