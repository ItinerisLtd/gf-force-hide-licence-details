<?php
/**
 * Plugin Name:     GF Force Enable HTML5
 * Plugin URI:      https://github.com/ItinerisLtd/gf-force-hide-licence-details/
 * Description:     Force Gravity Forms hide license details.
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     gf-force-hide-licence-details
 */

declare(strict_types=1);

namespace Itineris\GFForceHideLicenceDetails;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('gform_settings_display_license_details', '__return_false');
