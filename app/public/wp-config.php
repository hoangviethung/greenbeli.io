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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KkFpzv9u+JSnnz7iK/eBklhwWZj1PSD/GmeN9Cubkr1gCNDxptqfbiw8OjYYmqlfIbjJ6mCe//vIImujc3hCAQ==');
define('SECURE_AUTH_KEY',  'oH5/FFoJrOtv21h+FvUkydDQSMo1gXRq3JqlaNHfEU8WrJety3qIr2JBa9x4SX2/nNCZ+2kda6M+f2323YQeNA==');
define('LOGGED_IN_KEY',    'dZLvD+GcyYatc3ilkGk9xWnnlQFfsj1o10HR/uFPsrcU875FmurG/tfngvB+Hu2iJf88aRZDhZwcgawPLkuMsg==');
define('NONCE_KEY',        '/JKMVpRadmfn1H1B2omU3dyalFICUCFD3i9DLAaAluSbX+p8uoE2qMMfvZlxknPWBV2eiVn3zMz44jU23iL6dw==');
define('AUTH_SALT',        'ZTcuoFaQgbas67mPh1ZlQUZD05NVxBSC8mi2XbXEf2OPEpm0096btoWuvK0e1gJ9cfar9xbPIigCO3n6x1hBNQ==');
define('SECURE_AUTH_SALT', 'c6Hx/FC673/5FZQy9zm+1b5Mp6PfenNAi+tHOBXszoL0ay8jrkslnJfDjzIA05+wQPFY4bwq2wzKxGl9SV0aaw==');
define('LOGGED_IN_SALT',   '+68FjI53MHAHuoFrYzmeOt8fdSt10Em+q8I2d1MY9jjv0TMGvgh+jx0JhZog4K3PCnp8mfukKAWKcnf2yqT//A==');
define('NONCE_SALT',       'DKVfhTaTIUllOGCDd4POFRQUUbv9FuQQp00zMlca7F0r4U3LQzwuZ3a16e4HBfk7JOPPOUkTh+oQmFSIIw5DCg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
