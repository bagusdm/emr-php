<!DOCTYPE html>
<html>
<head>
    <title>Add Medical Record</title>
</head>
<body>
    <h2>Add Medical Record</h2>
    <form action="save_record.php" method="post">
        <label for="patient_id">Patient ID:</label>
        <input type="number" id="patient_id" name="patient_id" required><br><br>
        
        <label for="doctor_id">Doctor ID:</label>
        <input type="number" id="doctor_id" name="doctor_id" required><br><br>
        
        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" required></textarea><br><br>
        
        <label for="treatment">Treatment:</label>
        <textarea id="treatment" name="treatment" required></textarea><br><br>
        
        <label for="record_date">Record Date:</label>
        <input type="date" id="record_date" name="record_date" required><br><br>
        
        <button type="submit">Save Record</button>
    </form>
</body>
</html>