<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woodb');

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
define('AUTH_KEY',         'aR(tvvHZ!3[wH#qySE_r9-h:5WcRRRKNgN;RA.cM9@$?:H]9G3KSk?6bAM%_l1:!');
define('SECURE_AUTH_KEY',  'far?d+OXmT&Kp|F/6AJ#Fkau~=m`E2ml@fm(NPxd<wi48-EI)H!+6}v%J+5uaE)n');
define('LOGGED_IN_KEY',    'oav]gkY)o42sssA)%HJ0Zj$2Hut?ydG}[#~s7eGmKigGdXm03(`]^8;_e:7`v[gP');
define('NONCE_KEY',        '^?njZ?$mY$D*[2|Jx/hz>_gi=8bPIQ LTTU-e}59]hxV^tFRD)[9ZK3,Eh$wxR|:');
define('AUTH_SALT',        '.WSXvX3,75:BGc{|/Jcp@km][Ucx4zrr$jJD,{BCdh8 ckKeTW8;,l[#q%0J7lZT');
define('SECURE_AUTH_SALT', 'Xf}Q^C|MTG*X-~UBeqWv0#{@$[W>y7h8vG1*rgcS!g$YW^v_EpP4YI,LFM#S^i:`');
define('LOGGED_IN_SALT',   'VAf*M<d%z6Ffy#2ka(efUF!oi}->5rreNr{F^fd2W#ry/>WP.S8B-?%.T]vuZ9,n');
define('NONCE_SALT',       '~uM/*k!Ox~qH!]_5,&Anf .^}UKzkL/@?wwlm[g3AHpF(rIEXalnMI ]smDN])+C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_woo';

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
