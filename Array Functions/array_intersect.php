<?php
    $name1 = array("Rohit", "Mohit", "vivek", "Meet");
    $name2 = array("Rohit", "sumit", "sameer", "Aakash", "Meet");
    $name3 = array_intersect($name1,$name2);
    foreach( $name3 as $var)
    {
        echo "$var<br>";
    }
?>