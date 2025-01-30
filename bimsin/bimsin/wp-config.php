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
define( 'DB_NAME', 'db_latihan_wp' );

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
define( 'AUTH_KEY',         '^2`Rco9e@pf[^$qY]36|l4%(ytdkDmVjyxo>fV=$!2!d-p@P#kiWv><-vT#_LlDZ' );
define( 'SECURE_AUTH_KEY',  'U-[Px{L).T.[a&[z[niOa{~VF#Unnbm)q4;RQ(<U-g-T~+[}JF$|:Cn24N8uu^Tl' );
define( 'LOGGED_IN_KEY',    '`Sp;:o8eyC@+b>q^MuMXsPCI9X{jw@Pu){e?,L^Erat{MhKb~9<#hxc~sa<A7Ks+' );
define( 'NONCE_KEY',        'Q:*71:$u H`iwI$>[un[2{8uvRH-!!tG.)Lr$7A+=_HP1UE~RJ4%Y~Ru7z_Z+p?;' );
define( 'AUTH_SALT',        ':A[pqnwJZjA+,:FA}%>S[X-U=dnWwYCHgD_wUqQ.FhOy,Pci0JFv[SS#rVe4EHcw' );
define( 'SECURE_AUTH_SALT', '3!4{1RWVYa@[OP,pterCq;Nin~pKbE@w;)~p/P0rAn>Zps:3BsrPWd(QNCr}((pj' );
define( 'LOGGED_IN_SALT',   '|m]|Jo6Me,m4EzEQ:hu2.h|mh mv|mi.fEHAC+]Uc.v|w5Zz>Af,. =1KzocH`Uj' );
define( 'NONCE_SALT',       '/uTv*f2-WXI*pm8Gr6cPUuO=!6=8p}4T.0!5guR3)XQ9tN;^b*OjOf+ylJXZ:CL<' );

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
