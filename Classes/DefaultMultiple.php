<?php

require_once(dirname(__FILE__) .'/../Interfaces/multipleInterface.php');

class DefaultMultiple implements multipleInterface {

    public static function isMultipleOf($number){
        return true;
    }

    public static function parse($number){
        return strval($number);
    }
}


?>