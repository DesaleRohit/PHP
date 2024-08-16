<html>

<head>
</head>

<body>
    <form action="index.php" method="GET">
        <label>Num 1:</label><input type="text" id="n1" name="n1"/><br>
        <label>Operator: </label><input type="text" id="op" name="op" /><br>
        <label>Num 2:</label><input type="text" id="n2" name="n2"/><br>
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