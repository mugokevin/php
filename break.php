<?php
$x = 0;

while ($x<10){
    if ($x==4){
        $x++;
        continue;
    }
    echo  "the number is: $x<br>";
    $x++;
}


$x = 0;

while ($x < 10) {
    if ($x == 4) {
        $x++;
        break;
    }
    echo "the number is: $x<br>";
    $x++;
}


