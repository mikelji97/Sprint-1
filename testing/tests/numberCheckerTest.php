<?php 

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

require_once "numberChecker";

class NumberCheckerTest extends TestCase{

	public function testIsEven() {
		$ejemplo1 = new NumberChecker(12);
		$this->assertTrue($ejemplo1->isEven());
	}
	public function testIsPositive() {
		$ejemplo2 = new NumberChecker(51);
		$this ->assertTrue($ejemplo2->isPositive());
	}
		public function testIsNotEven() {
		$ejemplo3 = new numberChecker(17);
		$this->assertFalse($ejemplo3->IsEven());
	}
	public function testIsNotPositive() {
		$ejemplo4 = new numberChecker(-8);
		$this->assertFalse($ejemplo4->IsPositive());

		
	}
}