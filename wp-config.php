<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pulkit123123');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+j%T~ o|;>_tr5 #3-PP>OMLytZD10:R/c/`$U>7$nIl/k?jrrG-A5[2 pB/#%Z|');
define('SECURE_AUTH_KEY',  'dO)T9;Xbf vU-tvU~stm?T[(}Kf/,vt$A$QYml9UA?siH~coqt]sQ&B@3jNQX5Q-');
define('LOGGED_IN_KEY',    'YRRU|;A.r/-e;!2VDOrujoS?t)`etD~Vm13EWo71>lG^2BCm!Ey-w-|[?<k7-]?J');
define('NONCE_KEY',        'NXJ!kzOi=to)vS#/FgH^LP31/msbYyDK1B/2guAeH}W?:S#KVgGRaTpD=Yk:EdVk');
define('AUTH_SALT',        'ui`fGac8Eq!0$VO|$o@q{m8-h);/Ug)obMV&0z9tg-~(=~bB#&?[~$EF?0>ft|7s');
define('SECURE_AUTH_SALT', 'R?*cnWBO+<62X2a=TK{d`x5Ks{ldUb_gyPwwVN6 QLl-|fW7Z+5r1`:d!WK#4||:');
define('LOGGED_IN_SALT',   'sMK0?dy6@!Q^s f1B41Dy*dgVbTx;.UrslQ%.usu=7b+Cv{D3$fx7M_[Ppz5CCGV');
define('NONCE_SALT',       '-]NXLIWp%nKi!:9Rb|VN0|y@%ya^d`PsO?w)Kh(vByF]sOQ3jF=$y)Bg4H2s-W|.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
