<?php
/**
 * Transfer Validation Test Case File
 *
 * Copyright (c) 2007-2013 David Persson
 *
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * PHP version 5
 * CakePHP version 1.3
 *
 * @package    media
 * @subpackage media.tests.cases.libs
 * @copyright  2007-2013 David Persson <nperson@gmx.de>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/davidpersson/media
 */
App::import('Lib','Media.TransferValidation');
require_once dirname(dirname(dirname(__FILE__))) . DS . 'fixtures' . DS . 'test_data.php';

/**
 * Transfer Validation Test Case Class
 *
 * @package    media
 * @subpackage media.tests.cases.libs
 */
class TransferValidationTest extends CakeTestCase {
	public function setUp() {
		$this->TestData = new TestData();
	}

	public function tearDown() {
		$this->TestData->flushFiles();
	}
}