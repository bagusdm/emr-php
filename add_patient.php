<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>
    <h2>Add Patient</h2>
    <form action="save_patient.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>
        
        <label for="contact_info">Contact Info:</label>
        <input type="text" id="contact_info" name="contact_info"><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea><br><br>
        
        <button type="submit">Add Patient</button>
    </form>
</body>
</html>