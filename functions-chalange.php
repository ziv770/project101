<?php

$odd=0;
$even=0;
$lessThen50=0;
$moreThen50=0;
$fif=0;

for($i=1;$i<=100;$i++){




$randNumber=rand(1,200);
$a=$randNumber%2;

if ($a!=0){
    echo $randNumber . " (the number is odd)";

    }
    else {
        echo $randNumber . " (the number is even)";

    }
echo "<br>";

if ($a!=0){
    $odd++;
}
else{
    $even++;
}


if ($randNumber<50){
    $lessThen50++;
}
else if($randNumber>50){
   $moreThen50++;
}
else{
    $fif++;
}



}

echo "<br>";
echo "the total amount of odd numbers is $odd" . "<br>";
echo "the total amount of even numbers is $even" . "<br>";
echo "the total amount of numbers smaller than 50 is $lessThen50". "<br>";
echo "the total amount of numbers greater than 50 is $moreThen50". "<br>";
echo "the total amount of numbers that are exactly 50 is $fif". "<br>";


?>