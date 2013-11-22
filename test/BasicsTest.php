<?php
require_once 'PHPUnit/Framework/TestCase.php';

/**
 * test case.
 */
class BasicsTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * If you cast string '0' to bool type, you will get false.
	 */
	public function testStringWithZeroCastedToBoolGivesFalse() {
		$this->assertFalse((bool)'0');
	}
	
	/**
	 * If you cast empty array to bool type, you will get false.
	 */
	public function testEmptyArrayCastedToBoolGivesFalse() {
		$this->assertFalse((bool)array());
	}
	
	/**
	 * If you cast empty object to bool type, you will get true.
	 */
	public function testEmptyObjectCastedToBoolGivesTrue() {
		$this->asserttrue((bool)new stdClass());
	}

}
