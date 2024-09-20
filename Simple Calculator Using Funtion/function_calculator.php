<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];

function add($num1, $num2)
{
    return $num1 + $num2;
}

function subtract($num1, $num2)
{
    return $num1 - $num2;
}

function multiply($num1, $num2)
{
    return $num1 * $num2;
}

function divide($num1, $num2)
{
    return $num1 / $num2;
}

switch ($operator) {
    case "+":
        echo "Addition: " . add($num1, $num2);
        break;
    case "-":
        echo "Subtraction: " . subtract($num1, $num2);
        break;
    case "*":
        echo "Multiplication: " . multiply($num1, $num2);
        break;
    case "/":
        echo "Division: " . divide($num1, $num2);
        break;
    default:
        echo  "Invalid operation";
}

?>