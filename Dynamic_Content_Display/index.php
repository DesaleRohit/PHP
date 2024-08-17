<?php
    switch($_GET['page'])
    {
       case 'about us':
        echo "About Us :";
        echo "<p>WE ARE TEAM OF PASSIONATE DEVELOPERS</p>";
        break;
        case 'contact us':
        echo "Contact Us :";
        echo "<p>contactexample@gmail.com</p>";
        break;  
        default:
        echo "<p>Invalid Parameter</p>";
    }
?>

<head>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            font-style: italic;
            font-size: 50px;
            background-color: white;
            color: red;
        }

        p{
            font-size: 50px;
        }

    </style>
</head>