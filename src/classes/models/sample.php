<?php
/**
 * @author Technote
 * @copyright Technote All Rights Reserved
 * @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space/
 */

namespace Framework_Test\Classes\Models;

use WP_Framework_Common\Traits\Package;
use WP_Framework_Core\Traits\Hook;
use WP_Framework_Core\Traits\Singleton;

if ( ! defined( 'FRAMEWORK_TEST' ) ) {
	exit;
}

/**
 * Class Sample
 * @package Framework_Test\Classes\Models
 */
class Sample implements \WP_Framework_Core\Interfaces\Singleton, \WP_Framework_Core\Interfaces\Hook {

	use Singleton, Hook, Package;

	/**
	 * @var int $count
	 */
	private $count = 0;

	/**
	 * @noinspection PhpUnusedPrivateMethodInspection
	 * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
	 *
	 * @return int
	 */
	private function filter_test() {
		return ++$this->count;
	}

	/**
	 * reset count
	 */
	public function reset_count() {
		$this->count = 0;
	}

	/**
	 * @return int
	 */
	public function get_count() {
		return $this->count;
	}
}
