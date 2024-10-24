<?php
    $str ="Wellcome to my world";

    echo "Length of string: ".strlen($str)."<br>";

    echo "number of words: ".str_word_count($str)."<br>";

    echo "Reverse: ".strrev($str)."<br>";

    echo "UC Words: ".ucwords($str)."<br>";

    echo "Upper Case: ".strtoupper($str)."<br>";

    echo "Lower Case: ".strtolower($str)."<br>";

    echo "Position of word: ".strpos($str,"my")."<br>";

    echo "Replace: ".str_replace("world","PHP",$str)."<br>";

    echo "Repeat: ".str_repeat($str,3)."<br>";

    echo "Substring: ".substr($str,5)."<br>";

    echo "trime: ".trim($str)."<br>";
?>