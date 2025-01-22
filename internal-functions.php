<?php
$ones=0;
$twos=0;
for($i=1;$i<=100;$i++){


$randNumber=rand(1,2);
if ($randNumber==1){
    $ones++;
}
else{
    $twos++;
}
}
echo "ones=$ones" . "<br>";
echo "twos=$twos";

?>