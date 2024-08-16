<?php

$n1 = $_GET["n1"];
$op = $_GET["op"];
$n2 = $_GET["n2"];

    if ($op == "+") 
    {
        $ans = $n1 + $n2;
    }
    else if ($op == "-") 
    {
        $ans = $n1 - $n2;
    } 
    else if ($op == "*") 
    {
        $ans = $n1 * $n2;
    } 
    else if ($op == "/")
    {
        $ans = $n1 / $n2;
    }

?>