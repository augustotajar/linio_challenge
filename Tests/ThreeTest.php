<?php

use PHPUnit\Framework\TestCase;

final class ThreeTest extends TestCase{

    public function testIsMultipleOfThree(){
        $this->assertTrue(Three::isMultipleOf(3));
        $this->assertTrue(Three::isMultipleOf(rand()*3));
    }

    public function testIsNotMultipleOfThree(){
        $this->assertFalse(Three::isMultipleOf(1));
        $this->assertFalse(Three::isMultipleOf(2));
        $this->assertFalse(Three::isMultipleOf(4));
        $this->assertFalse(Three::isMultipleOf(5));
        $this->assertFalse(Three::isMultipleOf(7));
        $this->assertFalse(Three::isMultipleOf(8));
    }

    public function testThreeParseLinio(){
        $this->assertEquals('Linio',Three::parse(rand()));
    }
}

?>