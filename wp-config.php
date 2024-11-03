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
define( 'DB_NAME', 'my_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'skNlxm+JArviSLP%L&7/HceUWE;[A)y(#-w2yOlcab(8tF]Y{V$fbAou&-YnFPV`' );
define( 'SECURE_AUTH_KEY',  '-]#T]8LE9QS&0]7{`ceNl-?h=g&@g8.Nj]Espgb>wYJ_f{fu,Wkq^`7mT$m+YbN=' );
define( 'LOGGED_IN_KEY',    '%dbc^da]p6uIJ:M}.?Sm}r8m&z+{k,kmM=BW837PXDUE_Yyz&rrQOB_sp&8=4U6y' );
define( 'NONCE_KEY',        'fe?l~;F~guJ?q:,<{2/S^s`U0BOLC+PD+;W|]?b-C&G~)LYGI!5#a{O{+yQ8xR`T' );
define( 'AUTH_SALT',        'd@oT~s^g>J^x,0I{WVu:.5<TebZO` NBZ?iJYQ@qIroW@*AnvI7Uy&m0FcGw*Se`' );
define( 'SECURE_AUTH_SALT', '^B-rBBM+Nnp+,(t7ue$dyu):Euy{IN;BF6{C P6K07uN,IYd|wwgoISQT50JO W]' );
define( 'LOGGED_IN_SALT',   '`.s+s#}g1P)p__SJhGMt_9sW*@u_V4rXZ;Y<KjfDIL.&p@6+-n32a0A5xCs[YM-w' );
define( 'NONCE_SALT',       ',fkN|KfppJHZ*<hJ4L<:l-~$W8$]WS*U}@k^^P7U{-.1aUP)N6:M?j-YGCG{B]JW' );

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
