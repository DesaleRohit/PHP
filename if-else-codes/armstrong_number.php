<?php

    $num = $_REQUEST["number"];
    $r = 0;
    $sum = 0;
    $temp = $num;
    while ($temp > 0) 
    {
        $rem = $temp % 10;
        $sum = $sum + $rem * $rem * $rem;
        $temp = $temp / 10;
    }   
    if ($num == $sum) 
    {
        echo $num . " is Armstrong Number";
    } 
    else 
    {
        echo $num . " is not Armstrong Number";
    }

?>