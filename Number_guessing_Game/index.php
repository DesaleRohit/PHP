<?php

  $a = $_POST["guess"];
  $b = rand(1,100);

  if($a == $b)
  { 
    echo "congratulations...<br>";
    echo $b." is the correct number";
  }  
  else
  {
    echo "Try Again....<br>";
    echo "The correct number is ".$b;
  }     
?>
<head>
  <style>
   body{
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            font-size: 50px;
            background-color: black;
            color: white;
        }
  </style>
</head>