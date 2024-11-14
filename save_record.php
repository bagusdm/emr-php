<?php
include 'db.php';

$patient_id = $_POST['patient_id'];
$doctor_id = $_POST['doctor_id'];
$diagnosis = $_POST['diagnosis'];
$treatment = $_POST['treatment'];
$record_date = $_POST['record_date'];

$sql = "INSERT INTO medical_records (patient_id, doctor_id, diagnosis, treatment, record_date) 
        VALUES ('$patient_id', '$doctor_id', '$diagnosis', '$treatment', '$record_date')";

if ($conn->query($sql) === TRUE) {
    echo "Medical record added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>