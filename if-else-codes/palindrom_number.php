<?php

$num = $_REQUEST["number"];
$rev = 0;
$temp = $num;
while ($temp > 0) 
{
    $rem = $temp % 10;
    $rev = $rev * 10 + $rem;
    $temp = (int)($temp / 10);
}   
if ($num == $rev) 
{
    echo $num . " is Palindrom Number";
} 
else 
{
    echo $num . " is not Palindrom Number";
}

?>
