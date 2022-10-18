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
define( 'DB_NAME', 'wordpress_j0303211037' );

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
define( 'AUTH_KEY',         '.D`YI6Ewux*dd@g=UXz@bG;:TJ;sz}gT(b5sN%(R)xF?xHm]LM$&rfg-$fMPI3P-' );
define( 'SECURE_AUTH_KEY',  'U|(hy{Pki_Vp45Xg Vv9MUO2N}dpCdP6`o1kF14!,X;0_/Rs;y$c+Vd@]b:54?~%' );
define( 'LOGGED_IN_KEY',    ']N/s/yqMg5FHP.]I5,s|m VPMc9GAt@TiT{<8Ri1/f<:LgssqVd@PZF$/Z76(+,K' );
define( 'NONCE_KEY',        'T3%BnH<1b`*.k/Wzxbt9Y4]}X_JgQoZ}ZrgN3b;qJ6kI T&Rdl^ZDB?8m_0O-)!~' );
define( 'AUTH_SALT',        'F?.8NTQ}|;onuFHii5N[v2*9sE*C##RCv}Zl{qGAMBvO`O<4}I}W~Zk$gZ)z}@KH' );
define( 'SECURE_AUTH_SALT', '{_RDm6xx<.(VFwhn9o.d)UtadcjGl_smlbMPnZ}w,(l-CD;d&g^s(~<:Af$4<g)z' );
define( 'LOGGED_IN_SALT',   'V>Y?|CJyW/~l[rAT|~2S&NcH$$PR1ZHZ?<2yNHJ5:XnjPg!:880P#23lVmrV9O+J' );
define( 'NONCE_SALT',       '.P29d}#sR0f![Ek,Sg_8_NZ+kt.UC@beB4DfPbWzkg9r(=m%f5@F#-OS)O)#*~wn' );

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
