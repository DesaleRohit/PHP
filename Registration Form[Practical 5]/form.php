<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$interests = $_POST['interests']; 

echo "<h1>Registration Details</h1>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Course: " . $course . "<br>";
echo "Interests: <br>";
if (!empty($interests)) {
    foreach ($interests as $interest) {
        echo "- " . $interest . "<br>";
    }
} else {
    echo "No interests selected.<br>";
}
?>