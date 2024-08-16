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

echo "<p> The Answer is = $ans </p>";
?>
<head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            background-color: #ffc5c5;
            color: black;
        }

        p{
            font-size: 50px;
        } 
    </style>
</head>