<?php

/**
 * Bootstrap for ignores used by the WordPoints plugin.
 *
 * @package WordPoints_L10n_Validator_Config
 * @since 1.0.0
 */

/**
 * The ignores for basic stuff like PHP functions.
 *
 * @since 1.0.0
 */
include_once( __DIR__ . '/php.php' );

/**
 * The ignores for WordPress stuff.
 *
 * @since 1.0.0
 */
include_once( __DIR__ . '/wordpress.php' );

/**
 * The ignores for WordPoints stuff.
 *
 * @since 1.0.0
 */
include_once( __DIR__ . '/wordpoints.php' );

// EOF
