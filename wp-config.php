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
define( 'DB_NAME', 'pondokweb' );

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
define( 'AUTH_KEY',         ']>9Y@yesXVxaufamX]gFoD/WC+*RseV.^7Y0$nLHv~WLq}35+@M#c}v@I[Y$S5eN' );
define( 'SECURE_AUTH_KEY',  'L=jE XAB4pa|%_&gTOcShyS)n4Z|}kP~5y{7+s?On-6h{!,<G&JN}9e%?_eJ)C n' );
define( 'LOGGED_IN_KEY',    ':B#ZougxP(;)VTImteh6_$e:ts+]6s)9$0Z#KaauJ9bnxuH;i+$^?~QgrYkJ%1(9' );
define( 'NONCE_KEY',        'I:]dxKk?r!<Y7!.S.29]9Z^:o+7&DDUz^$V72!1ei;]R,d#}!Oh7R<$KY7F25FA?' );
define( 'AUTH_SALT',        'A;Ibn#j`WNTiy+5*B>`SK1nK,):,^BeQK Db7iRbE[1aIc93r}ej^`K5r-x^1uV/' );
define( 'SECURE_AUTH_SALT', '$9{xM+/0l^4+IE6&Oa-,htbUDDC!/yVzH>+!jsJ;.ZP7K}f!wTo>&OJ)^,KrEi|h' );
define( 'LOGGED_IN_SALT',   ' I1q_EE5G<Vo85xW=TrgyPo:N.ou3q5<@MBM<IAz, 3kQA-xo[khF97)}[MzS83M' );
define( 'NONCE_SALT',       '}1fgya|(=9.*#`*_`H]q|d4L4!%#~}mP$vj?)[.?TGVwz(gYfFby!.>&.X).=k-Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
