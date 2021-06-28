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
define( 'DB_NAME', 'brae8965_wp346' );

/** MySQL database username */
define( 'DB_USER', 'brae8965_wp346' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gp2S0][NP3' );

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
define( 'AUTH_KEY',         'g3nhui2iztbwoiwawirxftdvxoexf3cycaugzhcwkxrgq3atbxlxwckcsisjampp' );
define( 'SECURE_AUTH_KEY',  'gcfqe9emm5gd8jnrxhinm9s2cbyvitzvlhi9o44ctskaolpczzf30nci1docw9hy' );
define( 'LOGGED_IN_KEY',    'hl9ipnkvmgbwqiw57vhgvtutany7xz1ih1uoy28f0olm0yfhqeo7di7tiac0vzg4' );
define( 'NONCE_KEY',        'd2u2bwcficupdtbceylknbgzxmyghqwifkkbk1srqb96eohnq8wgehaxzcoiw7m3' );
define( 'AUTH_SALT',        'gphm9v5ihvjspinzxd5vu8fy6jkiowxdlkvsck4fiptcxhtkutt4btj8ekrgkiqd' );
define( 'SECURE_AUTH_SALT', 'yerugnjofgviuyluptuzpgywbwk9ujzmcm7tpzjfslmptpxlbcoycda82wpri8ni' );
define( 'LOGGED_IN_SALT',   '2wc0ouiorn56pin1z9rlu4w5bxym8ik9u9q9fj3bcigbah4ahes0mwkqplrhwg2i' );
define( 'NONCE_SALT',       'pwexc4vgmdunyyuztlukgtosc8p19yfvrfnejtqsv9n8fmc3p2xqup6zpa3pocmo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3i_';

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
