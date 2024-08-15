<?php
    $name = $_GET["txtname"];
    $age = $_GET["txtage"];

    echo "<p>Hello, $name! You are $age years old...</p>"

?>
<head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
            background-color: white;
            color: black;
        }

        p{
            font-size: 50px;
        }

    </style>
</head>