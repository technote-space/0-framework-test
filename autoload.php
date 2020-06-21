<?php
/**
 * Plugin Name: Framework Test
 * Plugin URI: https://github.com/wp-content-framework/0-framework-test
 * Description: Test plugin for WP Content Framework
 * Author: Technote
 * Version: 0.1.3
 * Author URI: https://technote.space
 * Text Domain: framework-test
 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( defined( 'FRAMEWORK_TEST' ) ) {
	return;
}

define( 'FRAMEWORK_TEST', 'Framework_Test' );

// for debug
//if ( ! empty( $_SERVER['SERVER_ADDR'] ) && '192.168.' === substr( $_SERVER['SERVER_ADDR'], 0, 8 ) ) {
//	if ( ! defined( 'WP_FRAMEWORK_PERFORMANCE_REPORT' ) ) {
//		define( 'WP_FRAMEWORK_PERFORMANCE_REPORT', true );
//	}
//	//	if ( ! defined( 'WP_FRAMEWORK_DETAIL_REPORT' ) ) {
//	//		define( 'WP_FRAMEWORK_DETAIL_REPORT', true );
//	//	}
//	if ( ! defined( 'WP_FRAMEWORK_PERFORMANCE_REPORT_EXCLUDE_AJAX' ) ) {
//		define( 'WP_FRAMEWORK_PERFORMANCE_REPORT_EXCLUDE_AJAX', true );
//	}
//	if ( ! defined( 'WP_FRAMEWORK_PERFORMANCE_REPORT_EXCLUDE_CRON' ) ) {
//		define( 'WP_FRAMEWORK_PERFORMANCE_REPORT_EXCLUDE_CRON', true );
//	}
//	if ( ! defined( 'WP_FRAMEWORK_REPORT_SLOW_QUERY' ) ) {
//		define( 'WP_FRAMEWORK_REPORT_SLOW_QUERY', true );
//	}
//}

@require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

WP_Framework::get_instance( FRAMEWORK_TEST, __FILE__ );
