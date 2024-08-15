<?php
    $name= $_POST["username"];
    $password= $_POST["password"];

    if($name=="Admin" && $password=="Admin123")
    {
        echo "<p>Welcome Admin</p>";
    }
    else
    {
        echo "<p>Invalid credentials. Please try again...</p>";
    }
?>
<head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            background-color: black;
            color: white;
        }

        p{
            font-size: 50px;
        }
    </style>
</head>