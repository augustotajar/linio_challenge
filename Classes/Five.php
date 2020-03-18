<?php

require_once(dirname(__FILE__) .'/../Interfaces/multipleInterface.php');

class Five implements multipleInterface {
    
    public static function isMultipleOf($number){
        return $number % 5 === 0;
    }

    public static function parse($number){
        return 'IT';
    }
}


?>