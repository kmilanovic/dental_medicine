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
define( 'DB_NAME', 'dental_medicine-db' );

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
define( 'AUTH_KEY',         'O^/BcFfmqLsil@1u/g|PGk_vq#_*4(Fg2%5NMPmu8E$9?r_^]*r^Zwycqib LQF/' );
define( 'SECURE_AUTH_KEY',  '9TP ?psk4o8PK$YKKzQHq9d)%@qw:&u:UyTI.kA]29I=)K(!2av]W3mE#I}_n{iR' );
define( 'LOGGED_IN_KEY',    'hv=I.l~vV_!ev+-aK a!.!Lf:29fyR{LBw&V5h/u2^i/TMh74C,F@i7V-L,~&!a5' );
define( 'NONCE_KEY',        'MfSz/!v<SU=c%</AtI[TRd/aHpR9,YO)N#9$W:3RqG?uDqo#BkM*X7vdIPiUOVA&' );
define( 'AUTH_SALT',        'c`H&v[Go+m$J]iu&:Xd!k*_8]Hn61pWDmC)8~Mw>`{8/2c.jO>mFHmM~B=)iL5BZ' );
define( 'SECURE_AUTH_SALT', '+&qTp9O6Z#(fF9OX[(4_K7NG,<r(__-P?yYyH]0fCwy]dL|UfU*W^cf,w>Dw=+Q`' );
define( 'LOGGED_IN_SALT',   '4LnART4+O.YL:=FONP#HPI~.D_^s>X@0{>G_k12H;;<Ixr1i:F% ;z/A^}XVgYG`' );
define( 'NONCE_SALT',       ')6I*AeK`)[dhy4ld*^@n]K Z{BMmO>5]>.y,.KTgcpW%(3CKUUbtv@0)h,O.(%o_' );

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
