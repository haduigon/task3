<?php

require 'generate.php';

$data=$_POST['input'];

if (ctype_digit($data)){

    $data=(int)$data;

    switch ($data){

        case $data>1000:
            echo "Too many numbers";
            break;
        case $data<1000:
            generate($data);
            break;
    }


}

else {

    echo "Input only the numbers from 0 to 1000";

}


?>