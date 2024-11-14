<!DOCTYPE html>
<html>
<head>
    <title>Schedule Appointment</title>
</head>
<body>
    <h2>Schedule Appointment</h2>
    <form action="save_appointment.php" method="post">
        <label for="patient_id">Patient ID:</label>
        <input type="number" id="patient_id" name="patient_id" required><br><br>
        
        <label for="doctor_id">Doctor ID:</label>
        <input type="number" id="doctor_id" name="doctor_id" required><br><br>
        
        <label for="appointment_date">Appointment Date:</label>
        <input type="datetime-local" id="appointment_date" name="appointment_date" required><br><br>
        
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Scheduled">Scheduled</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select><br><br>
        
        <button type="submit">Schedule Appointment</button>
    </form>
</body>
</html>