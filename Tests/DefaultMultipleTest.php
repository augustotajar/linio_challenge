<?php

use PHPUnit\Framework\TestCase;

final class DefaultMultipleTest extends TestCase{

    public function testIsMultipleOfDefaultMultiple(){
        $this->assertTrue(DefaultMultiple::isMultipleOf(rand()));
    }

    public function testDefaultMultipleParse(){
        $number = rand();
        $this->assertEquals($number,DefaultMultiple::parse($number));
    }

}

?>