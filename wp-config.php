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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xKeV|ExH(IQ;hU@U&}N`{b{491k:IUQ/?GLs(rrr*r-@7QsBs-=xmV$;eilQv;cD' );
define( 'SECURE_AUTH_KEY',   '!|dqG@Zy]c<P?kK }n`Z&IsF=&B3{N[y9tLCMo6I;l`m.Si1ri:sMw#KXXqDW/sK' );
define( 'LOGGED_IN_KEY',     '+RCS*Cq6wCnWX6o)7EbYt]0]]7#7_c?q}$>gUli4[QHz64p4Is?AB2K9.XuZ@<se' );
define( 'NONCE_KEY',         'H8<t5W%+FprFwSS |h1O&g@-Z#.Dj7g=u9Xk}[*za+4?d67.U;n!o!:~0d6%j-S/' );
define( 'AUTH_SALT',         'KBL97_.$9epngl&<1ZP:Rr$UkB|wB]=2ZTL4PbWtu,e<U_%K#[C1e@4gSQC,7_fv' );
define( 'SECURE_AUTH_SALT',  '{+Nv(i?_*I|Prj nLmF{S.Sr78_X] >>v)w9>LPJCkIM@jLaN!3jf5s4qvzHIEJZ' );
define( 'LOGGED_IN_SALT',    'x s=z!$``:]Jgp4,9Y)Y= V@]?(Yshg=K4+[QZ<LKwTo4TI, tlSzCy2@E+K8_yP' );
define( 'NONCE_SALT',        'riw] OYa*Rd3(J5xc#5~w0,)1@])TLqsM%Tx~@=;Qi+u%L;K&z6uP>%$cJV{Hl9L' );
define( 'WP_CACHE_KEY_SALT', '9$=j{SyICd9{Tt)0(;]2L=*:=Ld*xTMa9ni%=Z.xZ<(ZIHSRpB_PNR+.>UW?2:ti' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
