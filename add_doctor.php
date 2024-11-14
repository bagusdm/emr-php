<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
</head>
<body>
    <h2>Add Doctor</h2>
    <form action="save_doctor.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization"><br><br>
        
        <label for="contact_info">Contact Info:</label>
        <input type="text" id="contact_info" name="contact_info"><br><br>
        
        <button type="submit">Add Doctor</button>
    </form>
</body>
</html>