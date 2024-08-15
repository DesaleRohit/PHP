<?php
    $math = $_POST["Mmarks"];
    $os = $_POST["OSmarks"];
    $cpp = $_POST["Cmarks"];
    $web = $_POST["WDmarks"];

    $total = $math + $os + $cpp + $web;
    echo "Total Marks: " . $total . "<br>";
    $per = $total / 4;
    echo "Percentage: " . $per;

    if($per>= 35 && $per < 55)
    {
        echo "<br> Student Pass with Grade: D"; 
    }
    else if($per>= 55 && $per < 75) 
    {
        echo "<br> Student Pass with Grade: C";
    }
    else if($per>= 75 && $per < 85)
    {   
        echo "<br> Student Pass with Grade: B";
    }
    else if($per>= 85 && $per < 100)
    {
        echo "<br>Student Pass with Grade: A";
    }
    else
    {
        echo "<br>Student is Fail";
    }
?>