<?php

 $num1=$_GET["num1"];
 $num2=$_GET["num2"];

function add($num1, $num2)
{
    return $num1 + $num2;
}
echo add($num1, $num2);

?>