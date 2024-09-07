<?php

$day = $_REQUEST["day"];

switch ($day) {
    case 1:
        echo "<p>Monday</p>";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
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
            color: black;
        }
        p {
            color: white;
            font-size: 60px;
        }
    </style>
</head>