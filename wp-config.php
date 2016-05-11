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
define( 'DB_NAME', 'crunchDB4jidx' );

/** MySQL database username */
define( 'DB_USER', 'crunchDB4jidx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N0yNeb9HCn' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '43)T-W`=`+Ndp-l-P^Xg<c?6; |`>o0HqMx])g-31~ZPmWza(E$S#0$(V]l/kDLR');
define('SECURE_AUTH_KEY',  '*x^&Wjl+G85+yxu@Oq8ZTzrm*=wt|[wAr<D71G d@<O38L!+RIDal9Au{y7veq,@');
define('LOGGED_IN_KEY',    '<9o+L|xT9]t:c 4eDvH1 8O_%yU`KC[C9J8huvZrEEk^*[290LhY,-gG}0Dq[%Ls');
define('NONCE_KEY',        '8k>K2/;IeuBLZ:b#T`3vWvXOfZ.Ci6Lxhj]#+Av)?2KioI)O{z08d _,j&(9[`]>');
define('AUTH_SALT',        't8!XV|O-G/A>NTfPkweNS1RkCwzI;v--~-9TU$^+Y<s+1bA$b;u,U82-0Lo?f1o-');
define('SECURE_AUTH_SALT', 'n3g+RK+J@&aglGI,ij1cui P_J ,y-_`~l6c_7r`Qi5P(kK+e|W,T|;rE?Y.$2, ');
define('LOGGED_IN_SALT',   '+YCYxAf+|+gb_|-S9:rM~t8c[QK>m9V34;O*Bby`4_4,=_9n?[]1$q%zZm>q[U--');
define('NONCE_SALT',       'c,]}.qA]lx)2bP~lB*z,Kixwtc9I<6GhS!+~I4C<x0A@suRh-B]uL%*rg=dgJg<[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_crunch_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
