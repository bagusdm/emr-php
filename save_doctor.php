<?php
include 'db.php';

$name = $_POST['name'];
$specialization = $_POST['specialization'];
$contact_info = $_POST['contact_info'];

$sql = "INSERT INTO doctors (name, specialization, contact_info) VALUES ('$name', '$specialization', '$contact_info')";

if ($conn->query($sql) === TRUE) {
    echo "New doctor added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>