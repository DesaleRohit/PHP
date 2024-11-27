<?php
$db = mysqli_connect("localhost", "root", "root", "registerdb");

$result = mysqli_query($db, "SELECT * FROM studentinfo");

echo "<h1>List of Student</h1>";
echo "<table border=1>
 <tr> 
    <th>ID</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
 </tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
