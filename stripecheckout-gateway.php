<?php
/**
 * Plugin Name: WP eCommerce Stripe Checkout Plugin
 * Plugin URI: https://peterwhite.dev
 * Description: Stripe Checkout payment gateway plugin for WP eCommerce
 * Version: 1.0
 * Author: Peter White
 * Author URI: https://peterwhite.dev
**/

/**
 * You can register a single file, or an entire directory of multiple gateways.
 *
 * @return [type] [description]
 */
function wpsc_stripecheckout_register_file() {
	wpsc_register_payment_gateway_file( plugin_dir_path( __FILE__ ) . 'stripecheckout.php' );
}

add_filter( 'wpsc_init', 'wpsc_stripecheckout_register_file' );