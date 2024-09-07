<?php 
 
    $n=$_REQUEST["number"];

    $a=0;
    $b=1;
    $c=0;
     
    echo $a."<br>".$b; 

    for($i=1 ;$i<=$n ;$i++)
    {
        $c=$a+$b;
		echo "<br>".$c;
		$a=$b;
		$b=$c;  
    }
  
?>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            color: red;
            font-size: 45px;
        }
      
    </style>
</head>