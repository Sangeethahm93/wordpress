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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JJ5BVaoohSR1g87J7lXE$^vf5k>mm_[=5[[(+3J[FzJUH~f#dnxWuK5_hRuo,rCd' );
define( 'SECURE_AUTH_KEY',  'Jl%F~Z@mK{{mbQ?qO!LAYulIRzlK1:QfKF7x>b6pb)B2tcz-FSv$~8N<{+oqFrXl' );
define( 'LOGGED_IN_KEY',    'zRD!=BrNsU0zF4wZ1VA,jVRDmWOr$E|Dam8!Gj| (:,zY4g3VX{ 5KTLK$Ebua2#' );
define( 'NONCE_KEY',        'kX3v0^JSN>ZMr6$$,!38O]K>y4v;^sm/oDE*jVQ~9BhzEpp/f/n%ktJgI&#ROK?=' );
define( 'AUTH_SALT',        '5W(#%]bv69riSp94vHK}4w8iP>, <PMo#tWc)X>UEYmk]{-CZ>J@%2>ayI2T9!e3' );
define( 'SECURE_AUTH_SALT', '8I^zorVI#JT;k85D`d5=9W;5:p{.N?tpmOt=,884ElgKCH/apYF(3sWyfgc+&5(o' );
define( 'LOGGED_IN_SALT',   '#JlS UPnCOs.D@u{bXP#Unv]O++FF;$4I5e/0.jt?<1j5dT%A5f%t;uVD[0xpUuJ' );
define( 'NONCE_SALT',       'ez78ob#%LD3lstT~vpbX9%J) aP) xpARhi!3Vx;cU~Z:?Q(o]<4 _zIaXhg{&K7' );

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
