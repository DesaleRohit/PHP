<!--Example of  Assosiative Array -->
<?php
    $bike = array("Unicorn"=>150000 , "Splendor"=>83000 , "Shine 125cc"=>125000);

    // echo "Unicorn = ".$bike["Unicorn"] . "<br>";
    // echo "Splendor = ".$bike["Splendor"] ."<br>";
    // echo "Shine = " .$bike["Shine 125cc"];

    
    foreach($bike as $key=> $value)
    {
        echo "{$key} = {$value} <br> ";
    }
?>