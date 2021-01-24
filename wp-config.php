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
define( 'DB_USER', 'reyzalhildha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Asusx550z!' );

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
define( 'AUTH_KEY',         '<`=b$)+OOE^zcYxz10nUD*nCg0T)pw}vZY;FI8H|GScj}ReMmt!7xo8DizVr}M&:' );
define( 'SECURE_AUTH_KEY',  'T,wbVle>9(`0ZEDZmk;fBmCNxZsvu?OU NU~uCCtwzW~&VI5tx]f;Z[jPcHdr=rr' );
define( 'LOGGED_IN_KEY',    '6U=#-@S[<clZnO,u:p-#)UdVZ)|,?8C] $>>i6x{2sN%Hml&3Npm22<edIQuH~rR' );
define( 'NONCE_KEY',        'pRW73W{5~Dzzf:*C@J7|*-^.%Q`Y<Bq*vjm?^<x[Tpz5zn,LZ`u|#ZL&#By=z=;:' );
define( 'AUTH_SALT',        'Fl:`43YtdLxV6?:Om}RP7_7r]{1Xy:le0i$p8c@9f=<R5WEDs~j88@eRO7BIH>p3' );
define( 'SECURE_AUTH_SALT', ')v+c7#wz-(jyni#vAiD*U2U`s*$C~fvi}?C9&BQ:(}JnYwq:C(FPxz~QOX hKa.!' );
define( 'LOGGED_IN_SALT',   'G)f;apS30z8Bf0^j)1y+,,&,KBhSeB@G/V17dQxD~KFIIMY2mmkw^RNE)ZpK5Yx+' );
define( 'NONCE_SALT',       'Idmu#%ViI?<jK|Ufac(y3vfOwWo]JZ6C$xBu$ ]X|+DW;BK-./555K1d]SU HTZI' );

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
