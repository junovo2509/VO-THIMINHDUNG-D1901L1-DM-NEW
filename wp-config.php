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
define( 'DB_NAME', 'minhdung' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y!Klw@a0[Dk(fE:RG`0@?mwLFQb@U8FSQd66Gi>:kE)35auA5BtRW=LC%dN|U~1,' );
define( 'SECURE_AUTH_KEY',  '`K/Jlt+}AGdz[KRaH#vd(j^c.nRxnJTIy>u+W-=!JiEO:Vr>hc45!xExR%zVcLXI' );
define( 'LOGGED_IN_KEY',    'Y{z,tR;Jpo9O[CirsY*Y^N=<B~QxAh5fg0~7%uWqYT?aX,Sd}nV)u8Itbr@qY8wy' );
define( 'NONCE_KEY',        '?ric]A>?8%$!+|}TVcn$me-c7q)^tb53cvdx 8%GZ,X*%J@xIhse`xg_} ahxraw' );
define( 'AUTH_SALT',        'Xug_a?wQ}9gB!#z~)H]0[J~$C1o^3{7$ 3&SUw+A*/wd#aG}];8=fDEOFf]()Xyk' );
define( 'SECURE_AUTH_SALT', '(x(Xc9GhuYv^ck.34?=BX^2j;xfr#_U28<;q 2zLf@ut-XFjk #r^}6jtIAS&nzT' );
define( 'LOGGED_IN_SALT',   '&_Ca[Ggn&/4wPk|Z2ni c~GZQ[;XB3!KN3Xq[TcC-/BC85{VE>[RTMp2sJL7{J-`' );
define( 'NONCE_SALT',       '+#[Y^TfA}3gW=TR5,F=7QnzRP+<o|+D>3%P{=B*~`noYioNw6PZ?Ik8MyeIsCQQ)' );

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
