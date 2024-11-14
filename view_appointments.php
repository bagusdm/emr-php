<?php
include 'db.php';

$sql = "SELECT a.appointment_id, a.appointment_date, a.status, p.name AS patient_name, d.name AS doctor_name 
        FROM appointments a
        JOIN patients p ON a.patient_id = p.patient_id
        JOIN doctors d ON a.doctor_id = d.doctor_id
        ORDER BY a.appointment_date";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Appointment List</h2>";
    echo "<table>
            <tr>
                <th>Appointment ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
                <th>Status</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['appointment_id'] . "</td>
                <td>" . $row['patient_name'] . "</td>
                <td>" . $row['doctor_name'] . "</td>
                <td>" . $row['appointment_date'] . "</td>
                <td>" . $row['status'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No appointments found.";
}

$conn->close();
?>