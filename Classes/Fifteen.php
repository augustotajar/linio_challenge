<?php

require_once(dirname(__FILE__) .'/../Interfaces/multipleInterface.php');

class Fifteen implements multipleInterface {

    public static function isMultipleOf($number){
        return $number % 15 === 0;
    }

    public static function parse($number){
        return 'Linianos';
    }
}


?>