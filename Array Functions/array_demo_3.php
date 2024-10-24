<?php
// Indexed array
$fruits = array("Apple", "Banana", "Orange");
// Display the elements of the indexed array
echo "Fruits: <br>";
echo $fruits[0] . "<br>"; // Apple
echo $fruits[1] . "<br>"; // Banana
echo $fruits[2] . "<br>"; // Orange
echo "<br>";
// Associative array
$student_ages = array("John" => 20, "Jane" => 22, "Doe" => 19);
// Display the elements of the associative array
echo "Student Ages: <br>";
echo "John is " . $student_ages["John"] . " years old.<br>";
echo "Jane is " . $student_ages["Jane"] . " years old.<br>";
echo "Doe is " . $student_ages["Doe"] . " years old.<br>";
echo "<br>";
// Multidimensional array
$students = array(
    array("John", 20, "BCA"),
    array("Jane", 22, "MCA"),
    array("Doe", 19, "BCA")
);
// Display the elements of the multidimensional array
echo "Students Information: <br>";
echo $students[0][0] . " is " . $students[0][1] . " years old and studying " .
    $students[0][2] . ".<br>";
echo $students[1][0] . " is " . $students[1][1] . " years old and studying " .
    $students[1][2] . ".<br>";
echo $students[2][0] . " is " . $students[2][1] . " years old and studying " .
    $students[2][2] . ".<br>";
?>