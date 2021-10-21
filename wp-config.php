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
define( 'DB_NAME', 'PortfolioDb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'rS=%%e~-~vk32$_g-B+`ksUJqk<|)j#D`1acn=mn$|GAQTN4lFTD#~aUEhr$JPUn' );
define( 'SECURE_AUTH_KEY',  'gi9g{/q?gE4.N}>Z|dM<>ed)URfGz7VU&Ml_&@I1V}%x#Q;?3loNR~xTTLPeUHyS' );
define( 'LOGGED_IN_KEY',    'T0C8d^}JlBZMJHJ240^( Gpw8Rm?ntG05S&,tKro+JH^VpCGXrctuv3[wZFUCe*B' );
define( 'NONCE_KEY',        '6oZRJSfy6uxBFwMuNc7Iv+Nr,U]89LcQSW|uD.`<6p7X=k*]tB:,f|4H#86CvKXo' );
define( 'AUTH_SALT',        'PVo2[g.A6P-#*j_nw>3pVWZdM%73c5l2Ox/)q h*@F9X[9xnZHyb ;^5E1+V!yS5' );
define( 'SECURE_AUTH_SALT', 'vM~#l!h_L*o`(]I61MQ=2y}(R(5P[E}YUVY&,VwPcU%L_hXLY|:3O1}e`0kZ$TI*' );
define( 'LOGGED_IN_SALT',   'fL{>Pobd5~K}O,cQfw#c}y66(l?m0ryuGikOik~:oAf2/I=<!S+wNaF@PjD2Jxc1' );
define( 'NONCE_SALT',       'BC8h9m]5(xc(;m7.=NVp|-$H!E2p:3L? E^bBWp EbS6{cFSSSBnc_$JW@4eI}T%' );

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
