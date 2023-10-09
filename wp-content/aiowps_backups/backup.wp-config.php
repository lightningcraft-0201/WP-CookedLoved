<?php
define( 'WPCACHEHOME', '/home/irenamacri/webapps/production/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
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
define( 'DB_NAME', 'EUE6tN4jgU7JbNor' );

/** MySQL database username */
define( 'DB_USER', 'Di7iGKcQOvO9f8UE' );

/** MySQL database password */
define( 'DB_PASSWORD', '*,:v-hgfYn{Q,L.8-oZ@ZXVwk%n^Uex_' );

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
define( 'AUTH_KEY',         ',>EE{#fw)[Xp}1s4W,05e2,x/ [6QzP$W (ul[?aXj2sAo`{,3xlA]}}Di)^Zb:c' );
define( 'SECURE_AUTH_KEY',  '>P5>%~74V;0dBL%/+JYC`nN,S_v>zo,A!+J`&MRpdEwf3V;{Q&_JBa>Y?<.qL`Og' );
define( 'LOGGED_IN_KEY',    '76C~#p7pA5u Y<sF-.j?6#se*_E,jheS<*(K8Yt.o@YT,Fr[xPtDp0Y^[1w33h8w' );
define( 'NONCE_KEY',        'Lks?axaeDATx(Sexn ^/0wb[NV `ao)oGUszAD#&IIw|o78^V+2.`e5BU`No/Ea=' );
define( 'AUTH_SALT',        'T/lKN_+z>NF<i8_tdsa[9R%4A|r;2W`$P,oC5bXNwTWQ4d)e2D:|;$iY.bV|v?K2' );
define( 'SECURE_AUTH_SALT', 'r(E+[I7MNg!3D>2A}Nqba:{^kV?83ayfNb/|g+T]{mA607J(BdS5y9PC/!wV2cIo' );
define( 'LOGGED_IN_SALT',   '*%Izyy }DQT^)V2-Pj&E:,S.f&!c%a`n,x}oV~21|#p=n,2lonMT_J&%%kO!C^Xn' );
define( 'NONCE_SALT',       'pR5yLQfdXr V[WnINNiEz <>}Hh:W:+2KF4;xnbz0EHvB$j8C`?:Ta)6xIBP^?-.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'edpwp_';

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
