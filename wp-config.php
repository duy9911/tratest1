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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_ef0d07206b7c3a4' );
define( 'WPLANG', 'vi' );

/** MySQL database username */
define( 'DB_USER', 'b5360ff60f99a3' );

/** MySQL database password */
define( 'DB_PASSWORD', '928abeba' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

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
define( 'AUTH_KEY',         'm7eqzA!3$??lx;UtiuEQ@MlaCt;={BJGT_FfU+<~R[`9M}vvUA-(T|XEBIQ2<V)/' );
define( 'SECURE_AUTH_KEY',  'H,KkJQ^aSm x;ylosfvj9K/:NwH.IO6d5&RhS(AN;zRDd!&(0Lrr<caMSzd)o$K)' );
define( 'LOGGED_IN_KEY',    '9LECR@;k(MZaEb?0J(,ox}ak^Y6lG_eag>xGc`-?~J3Nd0iG>f2f(!~w31/K}}<B' );
define( 'NONCE_KEY',        ')j_uApBy[@sLuI~|@{RE.BUL|{tD!CM/mN]H4LR`dnE2c!|L>:&!$0O4V;|cZ]$n' );
define( 'AUTH_SALT',        '5VBQ0#-?r(i}IXO {XEt(}6ytmk&[ZSE[u[y8&cw]ThD8=jY-CE]]Gq`_SL6b:kl' );
define( 'SECURE_AUTH_SALT', 'PVrw[Ft@-~-H{8groBgd}n$<=f9`]b32cn6DiGvI0/i$6g[M*%hn=n`I[0l5V@fR' );
define( 'LOGGED_IN_SALT',   '2Di@R{ !c_ GX/n38T$JckkJ1Vq{ta/m:%D/CKUDLt@PJdAdT3pP0.OgtTdkKvOe' );
define( 'NONCE_SALT',       'E]OYO{oy/%no6`3YB-w*UIe;f&0?rmb1641MxhL5_LXJ`#T1Qg*O]FR>~j;bBov8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
