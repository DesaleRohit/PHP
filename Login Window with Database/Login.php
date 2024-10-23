<?php
    $db = mysqli_connect("localhost", "root", "root", "collegedb");

    if(!$db)
    {
        echo "Error: " . mysqli_connect_error();
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if($result->num_rows > 0)
    {
        echo "Login Successful";
    }
    else
    {
        echo "Invalid Username or Password";
    }
?>