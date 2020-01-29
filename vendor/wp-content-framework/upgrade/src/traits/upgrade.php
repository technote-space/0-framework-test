<?php
/**
 * WP_Framework_Upgrade Traits Upgrade
 *
 * @author Technote
 * @copyright Technote All Rights Reserved
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space
 */

namespace WP_Framework_Upgrade\Traits;

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	exit;
}

/**
 * Trait Upgrade
 * @package WP_Framework_Upgrade\Traits
 */
trait Upgrade {

	/**
	 * @return array { array {
	 * @type string $version target version
	 * @type callable|string $callback upgrade callback or method name
	 * } }
	 */
	abstract public function get_upgrade_methods();

}
