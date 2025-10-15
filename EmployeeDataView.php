<?php
require 'connection.php';

$Employee_ID = $_GET['Employee_ID'];

if (empty($Employee_ID)) {
    echo "Error: Employee ID is missing.";
    exit();
}

$EmployeeSQL = "SELECT * FROM employee_data WHERE Employee_ID = '$Employee_ID'";
$EmployeeResult = $con->query($EmployeeSQL);

if ($EmployeeResult->num_rows > 0) {
    $EmployeeData = $EmployeeResult->fetch_assoc();
} else {
    echo "Error: No Employee Data found for this user";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link rel="stylesheet" href="Current-Account.css">
</head>
<body>
    <div class="container">
        <h1>Employee Personal Information</h1>

        <!-- Employee Information -->
        <div class="info-box">
            <h3>Employee Information</h3>
            <p>Employee Type: <?php echo htmlspecialchars($EmployeeData['EmployeeType']); ?></p>
            <p>Full Name: <?php echo htmlspecialchars($EmployeeData['FullName']); ?></p>
            <p>Gender: <?php echo htmlspecialchars($EmployeeData['Gender']); ?></p>
            <p>Nic/Passport: <?php echo htmlspecialchars($EmployeeData['NIC_Passport']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($EmployeeData['PhoneNumber']); ?></p>
            <p>Email: <?php echo htmlspecialchars($EmployeeData['Email']); ?></p>
        </div>
    </div>
</body>
</html>

<?php
$con->close();
?>
