<?php
$i=1;


while ($i<=100){


    $a=$i%3;
    $b=$i%5;


    if($a==0 && $b==0){
        echo "fizz buzz" . "<br>";
    }
        elseif ($a==0){
            echo "fizz" . "<br>";
        }
        elseif ($b==0){
            echo "buzz" . "<br>";
        }
        else {
            echo $i . "<br>";
        }
        $i++;
        }



?>