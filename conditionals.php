<?php
$t = date("H");

if ($t < "10"){
    echo "have a good day";
} elseif ($t < "20"){
    echo "have a good afternoon";
} else{
    echo "have a good night";
}