<?php
require 'connection.php'; // Database connection
$user_id = $_GET['user_id'];

// Fetch account information based on user_id and current account type
$accountSQL = "SELECT * FROM accounts WHERE user_id = '$user_id' AND AccountType = 'current'";
$accountResult = $con->query($accountSQL);

if ($accountResult->num_rows > 0) {
    $accountData = $accountResult->fetch_assoc();
} else {
    echo "Error: No current account found for this user.";
    exit();
}

// Fetch user information based on user_id
$userSQL = "SELECT * FROM user_data WHERE user_id = '$user_id'";
$userResult = $con->query($userSQL);

if ($userResult->num_rows > 0) {
    $userData = $userResult->fetch_assoc();
} else {
    echo "Error: User information not found.";
    exit();
}

?> <!-- End of PHP block -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
    <link rel="stylesheet" href="Current-Account.css">
</head>
<body>


    <!-- Main Container -->
    <div class="container">
        <h1>User Profile</h1>

        <!-- Account Information -->
        <div class="info-box">
            <h3>Account Information</h3>
            <p>Account No: <?php echo $accountData['AccountNo']; ?></p>
            <p>Account Type: <?php echo $accountData['AccountType']; ?></p>
            <p>Account Balance: $<?php echo $accountData['Balance']; ?></p>
            <p>Available Balance: $<?php echo $accountData['Balance'] - 500; // Example calculation ?></p>
        </div>

        <!-- Account Holder Information -->
        <div class="info-box">
            <h3>Account Holder Information</h3>
            <p>Full Name: <?php echo $userData['FullName']; ?></p>
            <p>NIC / Passport no: <?php echo $userData['NIC_Passport']; ?></p>
            <p>Email: <?php echo $userData['Email']; ?></p>
            <p>Phone Number: <?php echo $userData['PhoneNo']; ?></p>
            <p>Address: <?php echo $userData['A_street'] . ', ' . $userData['City'] . ', ' . $userData['Country']; ?></p>
        </div>
    </div>
</body>
</html>

<?php
// Close the database connection
$con->close();
?>
