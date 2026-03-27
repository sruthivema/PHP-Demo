<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {

    public function testAddition() {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2,3));
    }

    public function testMultiplication() {
        $calc = new Calculator();
        $this->assertEquals(6, $calc->multiply(2,3));
    }

}
