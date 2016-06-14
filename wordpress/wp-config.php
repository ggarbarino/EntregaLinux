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
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '10.0.0.211');

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
define('AUTH_KEY',         '`JB(x5t|A>{eSK)-i$,-UrfR]W({{ /dVy-UjzN!lFy3+.aES?w.:&oJVNDf|jzt');
define('SECURE_AUTH_KEY',  'mbq +Xs;lrqm(-N5!QaWDZEHmz.M^3)Y:;7{05liUedx&a>wvo?BdPo]ps2SFd,0');
define('LOGGED_IN_KEY',    '~i2k;BTNW#>I_(<Ec#2n]e)L7dE,5z[WBw|. VU/[,[0!X|xsJ{@0he;0EvO]`V.');
define('NONCE_KEY',        'tS%on1Wr4BJ]`_*@hnDA2Y5@IE@uni7-m4=JO%L`0n*G5~OUkV7`Nw=&.A3nxJ6H');
define('AUTH_SALT',        'a;o2,38=tMm[84()?kQfu}1-::!4|-&zU=wck}dYY+DTR7y+o!1jZEVKJ6*,S?;$');
define('SECURE_AUTH_SALT', '5f(ckp?!PR.nr}h>&(mgKv=<-`xd<Dj8hr,ll}J;7#Gv2cjZ>i#i{2/3BAZT0I4[');
define('LOGGED_IN_SALT',   'I{*+?yD$w,$/8,1g[R-9}i:jo<SWJ1t6^`b/!vW^,R7M>BQE)IK=ht6.n/7fuLjR');
define('NONCE_SALT',       '*.%(T+H&Bsrk:Ah18$]Qd/_W93^UjYB&9=U+J`WCd,@L6mi=`zceC?hZ22sX{2!I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
