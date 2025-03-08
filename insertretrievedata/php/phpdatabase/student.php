<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "STU_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into student table
if (isset($_POST['submit'])) {
    $stuname = $_POST['stuname'];
    $address = $_POST['address'];
    $joindate = $_POST['joindate'];
    $faculty = $_POST['faculty'];
    $fee = $_POST['fee'];

    $sql = "INSERT INTO student (stuname, address, joindate, faculty, fee) 
            VALUES ('$stuname', '$address', '$joindate', '$faculty', '$fee')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Retrieve and display data from student table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

echo "<h2>Student Records</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Join Date</th>
            <th>Faculty</th>
            <th>Fee</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['stuid']}</td>
                <td>{$row['stuname']}</td>
                <td>{$row['address']}</td>
                <td>{$row['joindate']}</td>
                <td>{$row['faculty']}</td>
                <td>{$row['fee']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}

echo "</table>";

// Close connection
$conn->close();
?>

<!-- HTML Form to Insert Student Data -->
<form method="POST">
    <label>Name:</label> <input type="text" name="stuname" required><br>
    <label>Address:</label> <input type="text" name="address" required><br>
    <label>Join Date:</label> <input type="date" name="joindate" required><br>
    <label>Faculty:</label> <input type="text" name="faculty" required><br>
    <label>Fee:</label> <input type="number" step="0.01" name="fee" required><br>
    <button type="submit" name="submit">Add Student</button>
</form>
