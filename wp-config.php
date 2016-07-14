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
define('DB_NAME', 'lakehousePub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'B4^Dm)l])%Pv#9RKI|--FK+-1+_Dt`3#zho7rPXV#~wJ;!QIat3+9<FF30GMVSoy');
define('SECURE_AUTH_KEY',  'C;1w&kK+OJW.U +GG)Y7A?iUIi*9b|F*}IVDs4@5=][{??Dtc!^~rjp&Mr#CH*?/');
define('LOGGED_IN_KEY',    '=pReGVUSIvjm=8O5^L;=g`TNU[a/o7$2q|MU #DCK7`WRMdFsrbi_zPgUgE]Be=g');
define('NONCE_KEY',        '11k,Vbe[i$|pn3pl,(j_{-~a~Kac{,]l04FEcrFkjB>ghSVN6h$_sO,]?77+aI=K');
define('AUTH_SALT',        'wb#`-l+8k^Z:.N#S7[HPr%k$o;EfAD^Aitk+7xwlr1;&apQgCDp^Z<ZsJ.3WE6;R');
define('SECURE_AUTH_SALT', '!)K:}iG,F|u^r<1zsr^Kq@:bhA~[RsWOso(ub}41PsK!p,#St5ERQ^b@Pd)AnBXd');
define('LOGGED_IN_SALT',   '0Ed.ryizGbvw|WR~G~}$EIfivu*Dgw(MN8X7`FB=*&kF 9ZED7){}~>kBL[!l9<l');
define('NONCE_SALT',       'Lwkv;Bb`GZ44x%oTf,4+<i.XY(IkEaD?I0>gr^8 C>nevnI-VnxZZJ%dFOBU:[JG');

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
