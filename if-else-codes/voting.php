<?php
    $age = $_POST["vote"];
    if($age>=18)
    {
        echo "Allowed for Voting";
    }
    else
    {
        echo "Not Allowed for Voting";
    }
?>