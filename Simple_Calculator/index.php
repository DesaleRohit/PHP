<html>

<head>
</head>

<body>
    <form action="index.php" method="POST" target="_self">
        <label>Num 1:</label><input type="text" id="n1" name="n1" /><br>
        <label>Operator: </label><input type="text" id="op" name="op" /><br>
        <label>Num 2:</label><input type="text" id="n2" name="n2" /><br>
        <input type="submit" value="Calculate">
    </form>
</body>

</html>

<?php

$n1 = $_POST["n1"];
$op = $_POST["op"];
$n2 = $_POST["n2"];

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

echo $ans;
?>