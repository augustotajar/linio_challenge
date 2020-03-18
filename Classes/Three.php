<?php

require_once(dirname(__FILE__) .'/../Interfaces/multipleInterface.php');

class Three implements multipleInterface {

    public static function isMultipleOf($number){
        return $number % 3 === 0;
    }

    public static function parse($number){
        return 'Linio';
    }
}


?>