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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q^o-/7EC#Mn? (pcu. 29[=0O5CWUOfP}0nG^n&$qcM~bybPW2;}(s}*#hZ*hG>p');
define('SECURE_AUTH_KEY',  'vVZj.?h6>{KCV?n3ES!i5@U!,)y_ -C7@mZNe2&O+k5kQ(94H<163n{r/4on jxt');
define('LOGGED_IN_KEY',    '%_JI[mAUgi=J&mR(wL(lf~x8oW3qrd}0rLFD_?`HWwh[$h*y=xqzWaR2LAt)yUJI');
define('NONCE_KEY',        '&:{lt8dm<=t!$@~=T:TuGYfEC?0t-+G]ybP;Q9pgMSg(O+3{^Xp#M,bh_+!0+LqY');
define('AUTH_SALT',        'L={>ey>t<z^{K`A&rUJ&/Nm:$EcsgE`LAv?jkg{GyS|+xbSZ|No?F8j;W=hG`ycI');
define('SECURE_AUTH_SALT', 'xfHNqqZ7&%-X<<hCa2C,(QL,5i49cTrXP1)M#fX.KenY=gXi|S<y|+ENAxV<}:z#');
define('LOGGED_IN_SALT',   'WntN3V~j!-Gr@21gl|{ TcViNR{#PRwp/`c ,`IB,7Iya|5{Lu{*PVRQTdERVhF|');
define('NONCE_SALT',       'JMBTTiZsA7lKZ,6nky?an<E?;pJ +Y|NPmUST8*z-n,._1q>0CkyLi$J,Ho4NHW5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
