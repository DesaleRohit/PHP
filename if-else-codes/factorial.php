<?php

$n = $_REQUEST["number"];

$fact = 1;

for ($i = 1; $i <= $n; $i++)
 {
    $fact = $fact * $i;
 }
echo "Factorial of $n is: $fact";

?>
