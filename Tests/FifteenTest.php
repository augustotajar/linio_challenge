<?php

use PHPUnit\Framework\TestCase;

final class FifteenTest extends TestCase{

    public function testIsMultipleOfFifteen(){
        $this->assertTrue(Fifteen::isMultipleOf(30));
        $this->assertTrue(Fifteen::isMultipleOf(rand()*15));
    }

    public function testIsNotMultipleOfFifteen(){
        $this->assertFalse(Fifteen::isMultipleOf(3));
        $this->assertFalse(Fifteen::isMultipleOf(5));
        $this->assertFalse(Fifteen::isMultipleOf(10));
    }

    public function testFifteenParseLinianos(){
        $this->assertEquals('Linianos',Fifteen::parse(rand()));
    }

}

?>