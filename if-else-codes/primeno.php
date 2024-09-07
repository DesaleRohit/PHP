<?php
    $n = $_REQUEST["number"];
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
        echo "<p>The Number is Prime</p>";
    }
    else
    {
        echo "<p>The Number is Not-Prime</p>";
    }
?>
 <head>
        <style>
            body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            color: black;
            font-size: 5px;
            }
            p{
              font-size: 55px; 
              color: white;
            }
        </style>