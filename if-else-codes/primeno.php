<?php
    $n = $_GET["number"];
    $flag=1;
    if($n==1)
    {
        $flag=1;
    }
    else
    {
        for($i=2; $i<=$n-1; $i++)
        {
            if($n % $i == 0)
            {
               $flag=0;
               break; 
            }
        }
    }
   if($flag==1)
    {
        echo "The Number is Prime";
    }
    else
    {
        echo "The Number is Not-Prime";
    }
?>