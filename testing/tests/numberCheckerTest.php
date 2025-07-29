<?php 

use PHPUnit\Framework\TestCase;


require_once "numberChecker";

class NumberCheckerTest extends TestCase{

	public function testIsEven() {
		$number = new NumberChecker(12);
		$this->assertTrue($number->isEven());
	}
	public function testIsPositive() {
		$number = new NumberChecker(51);
		$this ->assertTrue($number->isPositive());
	}
		public function testIsNotEven() {
		$number = new numberChecker(17);
		$this->assertFalse($number->IsEven());
	}
	public function testIsNotPositive() {
		$number = new numberChecker(-8);
		$this->assertFalse($number->IsPositive());

		
	}
}