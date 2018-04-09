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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '10.203.0.81');

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
define('AUTH_KEY',         'D0|,l$,p)leX&|Slo~95xZxVPOngCe(^{wxgZaAp7s1aUOH3=:URNO;rT$|Xz(z_');
define('SECURE_AUTH_KEY',  'c:YTsnnr#~Eu~cVt3vu9CaOr)eLoOA4Y&DQ+OL}+M#{]T5fUaW2*I:+gYoAZk_$^');
define('LOGGED_IN_KEY',    'bk}:boj` 3[!M`W+a`r!(y|#M3f@XC.{QhwHgk;PxCV:GAy#GT0gO%!3FIu0p:l$');
define('NONCE_KEY',        'I8VzoatcuRijHHg=TN.=2%eI*<?s6XLv=5VHnwN0$Zhf Pyzt|+TkTT]64NFZ]&b');
define('AUTH_SALT',        'OwxdZ,dGC/#ddSWp&{k{ja{<o@p0_k{anR^<;BVm~U(hx2(+lJ5gWIVSU&.!dawP');
define('SECURE_AUTH_SALT', 'L)hO`G}8{qmTGhD]lpijq9mU@;,A, *nG/i9T*BB[$b,i.T-f38R_R?}ZpOfxx%6');
define('LOGGED_IN_SALT',   'Ad=YUydwI@7n;dd+MejKD/%!eweTQG;[2NbBEgY>uaU@-!Q-O,{)N:ZUq6T,)*G1');
define('NONCE_SALT',       '_FycmF*}!20#TXYhf^Vn$`{7ZM&yd:t86K::TkZ}x&b_Eu_R!HDQ!,B?7U65?qc1');

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
