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
define( 'DB_NAME', 'dogs' );

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
define( 'AUTH_KEY',         'juR6o?0`IV5U4J/GEpN26b~ |s6,`E0y?C@|(1tf2ECCyg#Gz0(%Y?-.FUG Uh?#' );
define( 'SECURE_AUTH_KEY',  ',qwK=w+RSodCSI^NC5pjvLf5F+0C-sGR88/iS!E6]fF2<XBD%Qy}duUqMORX1VwO' );
define( 'LOGGED_IN_KEY',    '}_X;^<M9:GQVss}aEt@FieRbPhKysM9@hM11!.r$UW.)K_#;{F!upyhCOkE!/?[w' );
define( 'NONCE_KEY',        'pSCL+E| -?/Opu_CJwjsSOnscpd[3LFR5>Q8Z0X72[/e&eKh9k&a?1v/Yeb<H5Mz' );
define( 'AUTH_SALT',        'ZaU[=uZ4G5N8+Zh0/C)W3b2PoTkozwwhfhl3.q$|,HY]p)SE{dtjkMVNk=Wr&0!n' );
define( 'SECURE_AUTH_SALT', 'A5ApYa,sC6VQeihHt;O0I_RFiktK5wPqV%uK;xxD|P5)}7C>:!?DC:h)sKeA,iUL' );
define( 'LOGGED_IN_SALT',   '>g@hO}Mvjw[a!O;w?[25GhYf2a~f OJlH_ZNo#y|L7JL30fE]]OT[]u(vvYQxUE{' );
define( 'NONCE_SALT',       'kdj<<`8R$>Vxw,+hPGD0TuUXArN!N2GVpW?xt-@.EV8#=j^j&Ng2T=Yx&n0TnpP0' );

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
