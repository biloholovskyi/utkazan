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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'utk_fix' );

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
define( 'AUTH_KEY',         '8.u@+QR?[!&[7NdZ$!Myu6$B)d /b/mR8eI%^krbUg3vlE[D3f@aZ@KNw!Uy-|,`' );
define( 'SECURE_AUTH_KEY',  'D32ST|D(uTUxadN .mT}=I0w7bJb$M~@Y6Sr%>;*Ap5-T#=P@nd1 e@c<f]Y5l|w' );
define( 'LOGGED_IN_KEY',    'wD-yv77;:VPLJOw9:F4HbL[T<iXEVMmct%_l7_:2oBQE:H!gR5~-BDf~<,!l!kqG' );
define( 'NONCE_KEY',        '}DQ*]sjl~qq9}C?3-MA.{eJd~_{VN%)HZ~)yWO{JE fDM3I/`$be{>_z@[V*cC9^' );
define( 'AUTH_SALT',        'I(-[cE+T+:1e!0H6/JnJYL| .COP7cc+^8hCavjiktTA+9x ))f,g?~1PIaz`!-f' );
define( 'SECURE_AUTH_SALT', 'y`9Ighd~xfRv !|bR@_h_R?T$,H>ojTu4<^P 5|CnofAXIRJpJ|kJy,+0owkBi}*' );
define( 'LOGGED_IN_SALT',   'hNvJ|OXX/]h|^j)<OcfF?`5SC{Iq)};WGo>![FsTIz3?keY2=~TP_ %fkA^D(RG<' );
define( 'NONCE_SALT',       'Na$/!do()2i.3|(9X1~d}z6Lhws%wQi2m,.)kF5i-5.L{LC.ZCBv@=>[UC1t-Z1h' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
