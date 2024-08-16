<h1>Multiplication Table of <?php echo $_POST["no"] ?></h1>
<?php
    $nu = $_POST["no"] ;

    for($i=1; $i<=10; $i++)
    {
        $ans = $nu * $i ;
     echo  $nu . " x " . $i . " = " . $ans . "<br>";
    }   

?>