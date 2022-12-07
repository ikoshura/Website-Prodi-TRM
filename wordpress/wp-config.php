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
define( 'DB_NAME', 'dcm' );

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
define( 'AUTH_KEY',         'jHxXJ:0crbTl*b5umu;}u}>JlL@VT<H#w 8< Z*#L=j8mO*mq=id~R`:A48=haj)' );
define( 'SECURE_AUTH_KEY',  '>jMF$vP>K4NR)p0@Q{zHYF[ou0~CqPLra>UH@DqzV*Lm~~=>g@fej7l=CkT.%pSf' );
define( 'LOGGED_IN_KEY',    'L-jc/MT^{WLH}A@6P~ZwvAyEvQu82vId`a0FT%z.g,^-yi][>,<%&@7YX{^7LDLg' );
define( 'NONCE_KEY',        'X ho3Vz0h3}S!oeff!]eLwxZC+StgVEvFv5Sp|ILhOov.(hLUyj2m2tp5Bo8Eoe ' );
define( 'AUTH_SALT',        ' G$~X|mI/LdTy)p8C&X1ZJ+8BwZlyXWM_TNq3jISmwX:.8z,zziez*GNU2W}>UTv' );
define( 'SECURE_AUTH_SALT', 'hol]-,{B7?y+Eeao%qR$d[*nBp19&}b^]iyppk^<Y><W?h:#h2H]c&[F1tIz{G}<' );
define( 'LOGGED_IN_SALT',   'dIRPY(tOW}#sh/Mf1Uy_fDtq}y:hc*<#<)Jk|{uaB2ZA5GCx6]mB*Xz~6n>GatMo' );
define( 'NONCE_SALT',       ' ]Q=zJJ_Y]NA%fyY8-b+o3e]xRyD[K(4^RbOaKLAJTMl{{]@0?OWc~(4wQo#=kGt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dcm_';

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
