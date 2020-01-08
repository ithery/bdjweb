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
define( 'DB_NAME', 'berdikaridjaya_website' );

/** MySQL database username */
define( 'DB_USER', 'berdikaridjaya_website' );

/** MySQL database password */
define( 'DB_PASSWORD', 'berdikari2020' );

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
define( 'AUTH_KEY',         'g>T#}j0Z<iPGtta&-QN:n(|G?A?:Gk?SQ{C8`0$Wo~3hYeE!}[o)7ng+ElvMC`e]' );
define( 'SECURE_AUTH_KEY',  '^tb_]bv#w.cG2^uxro}o H}&G:&7B@|}4~qVT^yB_,Uw|@6WjLI2=U:@VmVF<~)e' );
define( 'LOGGED_IN_KEY',    'TiVC5!:CPCXBZfJlg^G,Abjod&<p=9ZqiH7=TN]5KC9 L}#McXU] 2]# yplk+[)' );
define( 'NONCE_KEY',        '-,#NMRNuJXrt=5-}+,,4lTu]Cl[XT?49Uc,ME8zF:%,xTKD<E_;Xfd=-QS(!GV$.' );
define( 'AUTH_SALT',        'DHE({/-|W?/ws6a{ecgV{S:/97-ecC;mYlUcK<nSY<5[vT%@-nfi!H$dVSq*(ByB' );
define( 'SECURE_AUTH_SALT', '56U9I8^D%H[_RXJEg-! &U%wb4VNa+F:.Y8icC-5y1.P$v*.*V7T.|DDKUs1QL@>' );
define( 'LOGGED_IN_SALT',   'RO~E`j%(%xq=93bVN<w|KE&N_^9Czf$MfKMWX@2>l*dBo0&CKtHQw-W,Onhkn*8$' );
define( 'NONCE_SALT',       'Q0*,r`Ttb*]BUp6hxb+-D`tIz%E/+v9x6BKC[3zFT#jqUwV-71.*j[OS6EypmDm+' );

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
