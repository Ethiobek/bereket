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
define( 'DB_NAME', 'bereket' );

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
define( 'AUTH_KEY',         'F*:(A<Hz66W)]?)$gg^)O8?yw=JxH&Ztz!6?6#T?]W~(V],ri(VhUH)VpUq/Qu=!' );
define( 'SECURE_AUTH_KEY',  'vX%<*8.=Rm2GpAj;-O+@]{/Fe%&8W<PK1)R~#%)tI~^-k<GbrpYDUSo?8;$+WSHZ' );
define( 'LOGGED_IN_KEY',    '`W0g3PO`]$:/mhQqS(p:aM,d~ycaX3$lkSb})aDoCo `a,&e<;1+]zc1yS!KpbDk' );
define( 'NONCE_KEY',        'A?|&h0R01T>Ti;WZ}C*J)J<tein<{@5VW. ^0BfOOV=UKy!y?]?y_Janr|@@P$8z' );
define( 'AUTH_SALT',        'kI+fkoh?W{WwnQ(AF*PuIs4[xDhI%3EF*v%8x5|I$m+|1l.yG2iz8szzz5QBGyX5' );
define( 'SECURE_AUTH_SALT', 'nKUBTP`~(0%UYo.aiTaYdg]3sU[iKl!LYM5yZn8F5~TOe^i1[z]8 $kqv}{fl4+7' );
define( 'LOGGED_IN_SALT',   '6|QU |d$81`dhZGA7w$K|e@-?r37?EYV9cazYw)+=:Q&jqDZWjUvj&U>xlht54I/' );
define( 'NONCE_SALT',       'd|]!QlU6}*r@uyerVXN.y$^zl,5gHK0 KiaG8_s($?!TTufo9Z?a.Q%p(mpqeF.P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bek_';

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
