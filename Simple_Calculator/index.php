<html>

<head>
</head>

<body>
    <form action="index.php" method="GET">
        <input type="text"  placeholder="Enter first number" id="n1" name="n1"/><br>
        <input type="text" placeholder="Enter operator" id="op" name="op" /><br>
        <input type="text" placeholder="Enter second number" id="n2" name="n2"/><br>
        <input type="submit" value="Calculate">
    </form>
</body>

</html>

<?php

$n1 = $_GET["n1"];
$op = $_GET["op"];
$n2 = $_GET["n2"];

    if ($op == "+") 
    {
        $ans = $n1 + $n2;
    }
    else if ($op == "-") 
    {
        $ans = $n1 - $n2;
    } 
    else if ($op == "*") 
    {
        $ans = $n1 * $n2;
    } 
    else if ($op == "/")
    {
        $ans = $n1 / $n2;
    }

?>