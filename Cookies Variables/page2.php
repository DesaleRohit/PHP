<?php
    $name = $_COOKIE["name"];
    $email = $_COOKIE["email"];
    echo "Welcome ".$name." your email id is ".$email."<br>";
?>
<html>
    <a href="signout.php">Click here to signout</a>
</html>