<?php

use PHPUnit\Framework\TestCase;

final class FiveTest extends TestCase{

    public function testIsMultipleOfFive(){
        $this->assertTrue(Five::isMultipleOf(5));
        $this->assertTrue(Five::isMultipleOf(rand()*5));
    }

    public function testIsNotMultipleOfFive(){
        $this->assertFalse(Five::isMultipleOf(1));
        $this->assertFalse(Five::isMultipleOf(2));
        $this->assertFalse(Five::isMultipleOf(3));
        $this->assertFalse(Five::isMultipleOf(4));
        $this->assertFalse(Five::isMultipleOf(6));
        $this->assertFalse(Five::isMultipleOf(7));
    }

    public function testFiveParseIT(){
        $this->assertEquals('IT',Five::parse(rand()));
    }

}

?>