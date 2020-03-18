<?php

require __DIR__.'/vendor/autoload.php';

$fifteen = new Fifteen();
$five = new Five();
$three = new Three();
$default = new DefaultMultiple();

$numbers = [$fifteen,$five,$three,$default];

for($i = 1; $i < 101; $i++){
    foreach($numbers as $number){
        if($number->isMultipleOf($i)){
            echo $number->parse($i);      
            break;
        }
    }
    echo "<br>";
}

?>