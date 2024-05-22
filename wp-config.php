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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '4Ihq k?9SaenuQrcf_o9o.HB7B|G$]#[,0$1(rRsOtDD<}%mC0-oWrS7[ieP]r-7' );
define( 'SECURE_AUTH_KEY',  ',Z=QP}/!OD(3kI6YzX]YxIxAy@R$5y(>)MXMxn(m(dP?g8[ZDea&F4fQs{d<=Y(^' );
define( 'LOGGED_IN_KEY',    '92Zx^8HiC6IQPDIrUd#07JSBZi#G2WH70UzGPqJ]rcIWVF]^40-Ccd ,-k,mV;jf' );
define( 'NONCE_KEY',        'SC^Ib_)=i4@,>KQZhY->6@|p3K[ILuq3}{RHPndq]=<idK.l!Ji2WGNmvNS~und<' );
define( 'AUTH_SALT',        'e;<aP-c{$Z??Y,HdMo+)WntAmi9~tx#^Z$-6VsC87|#s `~2s3u8605rJID8^iUY' );
define( 'SECURE_AUTH_SALT', 'iZCF/cEWSU=Vkjn>`A|##Sqwb!5$95-y-Yrdr^[?JRr>dy<~vU!=16~?HETnDA>P' );
define( 'LOGGED_IN_SALT',   'ri}7$^HlCnF])77CBTX@.|D!-ZJkBnKej1qb5*0N&Uz*LQQRb[S+=?@urU&gj9>t' );
define( 'NONCE_SALT',       ',f*l-AIwH~-OUo~%~|MeHA<e,tG2YH@.f7p=zjHf %,G(yno;*%=G=ds-mF5lgof' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
