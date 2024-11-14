<?php
include 'db.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Patient List</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Contact Info</th>
                <th>Address</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['patient_id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['contact_info'] . "</td>
                <td>" . $row['address'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No patients found.";
}

$conn->close();
?>