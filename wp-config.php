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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'milanakagan' );

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
define( 'AUTH_KEY',         'Z=Qn@iqu#cXf<$|r73-:I<I}:$PL&+c7Zi86SRK`#ncvt[@8dB$q#$142zwZH+Bz' );
define( 'SECURE_AUTH_KEY',  'Nt3H{FCgz <0))sUf:mVQzRexh<) c6aj,u:E;8D{|]*?(Co&TUX]!;]V:*2@;8)' );
define( 'LOGGED_IN_KEY',    'q{g8e5X;GJ-_a[_MZh!n3e3KYXJQ,rrf9J*E)LAV 7dS[guc9m5@&4A.%cs~Chei' );
define( 'NONCE_KEY',        '+%7iXqs,SswxV<5Wb5,NP4q_sz(TPv.4RaEZ._|/8|SkhIWZNH[HYvZLLG{.:h=A' );
define( 'AUTH_SALT',        'mcDuGmt8<D Yi1@P;u(VA&h=p:S=q;,405MixNBL< SK?3S=uR:iQU^F5V:<x(!j' );
define( 'SECURE_AUTH_SALT', 'n<n_e_,LV!Nzv3wD4K[U/-0rep?lma5klcf [?z`L0!6$%{rW;]L8Gq:vor=X7E]' );
define( 'LOGGED_IN_SALT',   'db L5e2H39q:_9vaCSr_hqm_{8k{a^T88#gE_`oM>pce 3gC6v,dUWx:P^|mOh`h' );
define( 'NONCE_SALT',       'tO4:ZD>UZlDBSPo``)+BdIGk`0>h-wWX{ sPKL3:.??]T?8BMD:spUEjd@Le=47p' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
