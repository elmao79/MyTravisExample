<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends PHPUnit_Framework_TestCase {
	
	public function testOne() {
		$this->assertEquals(1, 1);
	}
	
	public function testTwo() {
		$this->assertEquals(2, 2);
	}
	
	public function testThree() {
		$this->assertEquals(3, 3);
	}
	
}
