<?php
include 'db.php';

$patient_id = $_POST['patient_id'];
$doctor_id = $_POST['doctor_id'];
$appointment_date = $_POST['appointment_date'];
$status = $_POST['status'];

$sql = "INSERT INTO appointments (patient_id, doctor_id, appointment_date, status) 
        VALUES ('$patient_id', '$doctor_id', '$appointment_date', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment scheduled successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>