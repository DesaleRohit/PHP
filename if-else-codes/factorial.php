<?php

$n = $_REQUEST["number"];

$fact = 1;

for ($i = 1; $i <= $n; $i++)
 {
    $fact = $fact * $i;
 }
echo "<p>Factorial of $n is: $fact</p>";

?>
    <head>
        <style>
            body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            color: black;
            font-size: 5px;
            }
           
            p{
              font-size: 55px; 
              color: black;
            }
        </style>
