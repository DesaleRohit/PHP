<?php
    $db = mysqli_connect("localhost","root","root","registerdb");
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $action = $_POST['action'];

    if($action == "INSERT")
    {
        mysqli_query($db,"INSERT INTO studentinfo (id ,name, mobile, email) VALUES ( '$id','$name', '$mobile', '$email')");
        echo " New record inserted successfully";
    }

    if($action == "UPDATE")
    {
        mysqli_query($db,"UPDATE studentinfo SET name='$name', mobile='$mobile', email='$email' WHERE id='$id'");
        echo " Record updated successfully";
    }

    if($action == "DELETE")
    {
        mysqli_query($db,"DELETE FROM studentinfo WHERE id='$id'");
        echo " Record deleted successfully";
    }
?>