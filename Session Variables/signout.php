<?php
    session_start();
    session_destroy();
    echo "Sign Out Successfully";
?>
<html>
    <body>
        <a href="page1.php">Go to Page 1</a>
        <a href="page2.php">Go to Page 2</a>
    </body>
</html>