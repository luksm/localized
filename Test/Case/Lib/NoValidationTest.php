<?php
/**
 * Norwegian Localized Validation class test case
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       Localized.Test.Case.Lib
 * @since         Localized Plugin v 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('NoValidation', 'Localized.Lib');

/**
 * NoValidationTest
 *
 * @package       Localized.Test.Case.Lib
 */
class NoValidationTest extends CakeTestCase {

/**
 * test the ssn method of NoValidation
 *
 * @return void
 */
	public function testSsn() {
		$this->assertTrue(NoValidation::ssn('12345678901'));
		$this->assertFalse(NoValidation::ssn('123456 12345'));
	}
}
