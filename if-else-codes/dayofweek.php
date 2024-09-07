<?php

$day = $_REQUEST["day"];

switch ($day) {
    case 1:
        echo "<p>Monday</p>";
        break;
    case 2:
        echo "<p>Tuesday</p>";
        break;
    case 3:
        echo "<p>Wednesday</p>";
        break;
    case 4:
        echo "<p>Thursday</p>";
        break;
    case 5:
        echo "<p>Friday</p>";
        break;
    case 6:
        echo "<p>Saturday</p>";
        break;
    case 7:
        echo "<p>Sunday</p>";
        break;
    default:
        echo "Invalid Input";
}

?>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            color: white;
        }
        p {
            color: white;
            font-size: 60px;
        }
    </style>
</head>