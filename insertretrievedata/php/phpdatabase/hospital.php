<?php
// Step 1: Connect to MySQL Database
$server = "localhost";  
$username = "root";  
$password = "mykey";  
$database = "hospital";  

$conn = mysqli_connect($server, $username, $password, $database);

// Step 2: Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Fetch Data from 'doctor' Table
$sql = "SELECT * FROM doctor";
$result = mysqli_query($conn, $sql);

// Step 4: Display Data in an HTML Table
echo "<h2>Doctor Records</h2>";
echo "<table border='1'>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
        </tr>";

// Step 5: Fetch Each Row and Print
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row["Sno"] . "</td>
            <td>" . $row["Name"] . "</td>
            <td>" . $row["Address"] . "</td>
            <td>" . $row["Age"] . "</td>
         </tr>";
}
echo "</table>";

// Step 6: Close Connection
mysqli_close($conn);
?>
