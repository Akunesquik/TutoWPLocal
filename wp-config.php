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
define( 'AUTH_KEY',         'ex3@9`G$-`A9(6[CL&eTGn+AGp!/Tj?]$EWf0TD&uT#Ky|Va>e+!oDF,?6g8+xI[' );
define( 'SECURE_AUTH_KEY',  '&:0=cFjAzGw~3lI4sn6Se/?3v+s+/,65Q7[#gem(8fcI_p^:/PmNuS&dn}m>Kv2*' );
define( 'LOGGED_IN_KEY',    '+Nyj6%<1XsPE}G|;$h>25`5[KoCjTQByeWXt}wW*07XmRY]AUL5/7Mf(H>~BqA6V' );
define( 'NONCE_KEY',        'R]t4g8zwT~O)2F:U[(/!jMi_&;[g<+Dd*gvhE}*lLpj1)eW,()$jt&%C/}MuO.23' );
define( 'AUTH_SALT',        '>zsNZ1bEvh1*(b^qfFV8Z^Qz<}{aQfd(oC[G.vwHy_LJg,$5SLO[KLF_^e&U9F; ' );
define( 'SECURE_AUTH_SALT', 'Nw<PhU:*tiS8.!-a3n@XJw58FJ1kS9KJfw{26t>[*b&Qi>v?A.YPk}L?hLs6|ag+' );
define( 'LOGGED_IN_SALT',   'A+/M#|V|_aWn?J(VaWibG!R7#N`R.!*ml5D%-xmPW$1G2@koUSPvTh9NY=TIA. G' );
define( 'NONCE_SALT',       '1I_p{p$@oI.y?7XvsooiBbt)-YjHX1G[f77L89|Rin&$[Y-,RP}OfYEoFv]_UWZU' );

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
