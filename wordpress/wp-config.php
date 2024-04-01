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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!0oehfqCH;K:Vvlbo*[_XIwWyWPX?.fPQ|O0FJV?t;qxm*r016|gI=fmB#=}{L}{' );
define( 'SECURE_AUTH_KEY',  '?]PpJB }QlUlt{9Ic-H?Y9?uR1q@&Qp#to>VDXX~,WICHgnB-iZnffYTWJ5mi01)' );
define( 'LOGGED_IN_KEY',    'I8g8/1M es8aK*7N1dTD!D8OK[gE,Mj;y}X^rQAdV?0Yx+KEma,5HMF;{HY(LT1.' );
define( 'NONCE_KEY',        '4^;1G$d)_-~MM^4mE,Zo_j&&3Ix1q(X1j->EuzH/l_m3fT5~zYitFKgG>6G1urOc' );
define( 'AUTH_SALT',        '>e>xJWc~Jn,k8LLqPd_G`SNG-Edv&Y}go0Roy#j5=q;?gIGtL1BEK,HLpr*Q<w{X' );
define( 'SECURE_AUTH_SALT', '?ql~Y1(Fj)GyO^OKlWQ:eAOiyNnZixUmb-/8Svpz+c^M=BE4^0X~$+*2#`+86[U)' );
define( 'LOGGED_IN_SALT',   'Fy1@vL1e{9].|47=8i9)Y$>@(p39=3=;5z#%MM,2.2BqfmiGz}z>D~?BAQdx*qXI' );
define( 'NONCE_SALT',       'dkG6HUyJr>8hIt}q/So.XO^S-=YgFWhC(#:r2AZfHIl=GMWa-DNBsnq,v,_FNttL' );

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
