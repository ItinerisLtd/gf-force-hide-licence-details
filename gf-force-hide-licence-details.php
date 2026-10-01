<?php
/**
 * Plugin Name:     GF Force Hide Licence Details
 * Plugin URI:      https://github.com/ItinerisLtd/gf-force-hide-licence-details/
 * Description:     Force Gravity Forms hide license details.
 * Version:         0.1.1
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
