<?php
function RectangleArea($lenght, $width)
{
    $area = $lenght * $width;

    return $area;
}

    $lenght = 10;
    $width = 3;
    $area = RectangleArea($lenght , $width);
    echo "The Area Of Rectangle is = ".$area;
?>
