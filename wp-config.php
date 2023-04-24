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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*.c-a//[)k*[r~q<.w0Vr>eDZI|qFo>$C}@q+^fW|3OGU61x`!_FXQ[</<31Xciw' );
define( 'SECURE_AUTH_KEY',  '6%Bfx>,adSf?I*[W7~/U {q,%_~04~|g.pqJ50oGi7lCwB2Jrrtr5o$~]Rh5/xlh' );
define( 'LOGGED_IN_KEY',    ',Y9ShGqMh!?>!bjO=sM[nG*{j?-~-^Nsd]2uVqFXzD]I,Z%GxN6*HeZ4tLof`FT&' );
define( 'NONCE_KEY',        '5-&fq[1b,6aEVy+*f#gB2==yaA&>Hc&-)Q-Rc{X2oz{i91Q6L0u><l~LOhi0sGUg' );
define( 'AUTH_SALT',        '?HfYckM~ZvNTy}t}!~{I~L1^`]TxojI9Osw/hiDX=oX{,,_8Q)|i.y{qzIGPZh_&' );
define( 'SECURE_AUTH_SALT', 'Qd>jQoB>GM,+)DOr;9EEGogRDr!u?PLZDhFaT*a tR36|L^o7EZ]TnU(z!Yqn-K|' );
define( 'LOGGED_IN_SALT',   'X;nBY5xKUOKIZkqEIY^zTZb4!j}D*:?jC^o0%Q5bf6t%`F:8O4bB(&$uj`n`I/_f' );
define( 'NONCE_SALT',       '&F-U`HQFs.,N*yJ+z](Ho[nwN(umsn!R!1v_RmZ*0Au*w7>@[6{O$}L:{<NlhP? ' );

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
