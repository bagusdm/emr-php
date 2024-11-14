<?php
include 'db.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$contact_info = $_POST['contact_info'];
$address = $_POST['address'];

$sql = "INSERT INTO patients (name, dob, gender, contact_info, address) VALUES ('$name', '$dob', '$gender', '$contact_info', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New patient added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>