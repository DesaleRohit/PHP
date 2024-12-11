<?php
function CircleArea($radius)
{
    $area = 3.14 * $radius * $radius;

    return $area;
}

$radius = 25;
$area = CircleArea($radius);
echo "Area of Circle is = " . $area . "<p>";

?>