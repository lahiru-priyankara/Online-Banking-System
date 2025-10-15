<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee Data</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your CSS file here -->
</head>
<body>
    <div class="container">
        <h1>Delete Employee Data</h1>
        
        <!-- Form for Deleting User -->
        <form action="ReDataDelete.php" method="POST">
            <label for="nic">NIC</label>
            <input type="text" id="nic" name="NID" required>

            <button>Delete</button>
        </form>
    </div>
</body>
</html>
