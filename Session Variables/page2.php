<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    echo "Welcome ".$name." your email id is ".$email;

?>
<html>
    <body>
        <a href="SignOut.php">Sign Out</a>
    </body>
</html>