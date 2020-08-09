<?php

$number2=0;
$counter=1;
function generate($number){

    do {

        $number2 = rand(0, 1000);
        $counter++;

    }while($number !== $number2);

    echo $counter;

    }


?>
