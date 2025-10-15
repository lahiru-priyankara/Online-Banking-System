<?php
require 'connection.php'; // Database connection

// Start the session
session_start();

// Fetch the saving_id from the session
if (isset($_SESSION['saving_id'])) {
    $saving_id = $_SESSION['saving_id'];
} else {
    echo "Error: User not logged in.";
    exit();
}

// Fetch account information based on saving_id and savings account type
$accountSQL = "SELECT * FROM accounts WHERE saving_id = '$saving_id' AND AccountType = 'Saving'";
$accountResult = $con->query($accountSQL);

if ($accountResult->num_rows > 0) {
    $accountData = $accountResult->fetch_assoc();
} else {
    echo "Error: No savings account found for this user.";
    exit();
}

// Fetch user information based on saving_id
$userSQL = "SELECT * FROM savingaccount_data WHERE saving_id = '$saving_id'";
$userResult = $con->query($userSQL);

if ($userResult->num_rows > 0) {
    $userData = $userResult->fetch_assoc();
} else {
    echo "Error: User information not found.";
    exit();
}

// Define the default interest rate (example: 5%)
$default_interest_rate = 5.00; // 5% as an example
$calculated_interest = 0;
$Balance = $accountData['Balance']; // Get the balance of the user's savings account

// Check if the balance is set and calculate the interest
$sql = "SELECT Balance FROM accounts WHERE saving_id = '$saving_id'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $Balance = $row['Balance'];

    // Calculate the interest based on the default interest rate
    $calculated_interest = ($Balance * $default_interest_rate) / 100;
    $full=$calculated_interest+$Balance;
} else {
    echo "No savings account found with the provided ID.";
}
?> 

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
        <h1>My Personal Account</h1>

        <!-- Account Information -->
        <div class="info-box">
            <h3>Account Information</h3>
            <p>Account No: <?php echo htmlspecialchars($accountData['AccountNo']); ?></p>
            <p>Account Type: <?php echo htmlspecialchars($accountData['AccountType']); ?></p>
            <p>Account Balance: $<?php echo number_format($accountData['Balance'], 2); ?></p>
            <p>Available Balance: $<?php echo number_format($accountData['Balance'] - 500, 2); // Example calculation ?></p>
        </div>

        <!-- Account Holder Information -->
        <div class="info-box">
            <h3>Account Holder Information</h3>
            <p>Full Name: <?php echo htmlspecialchars($userData['FullName']); ?></p>
            <p>NIC / Passport no: <?php echo htmlspecialchars($userData['NIC_Passport']); ?></p>
            <p>Email: <?php echo htmlspecialchars($userData['Email']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($userData['PhoneNo']); ?></p>
            <p>Address: <?php echo htmlspecialchars($userData['A_street'] . ', ' . $userData['City'] . ', ' . $userData['Country']); ?></p>
        </div>

        <!-- Interest Rate Information -->
        <div class="info-box">
            <h3>Interest Rate Information</h3>
            <p>Interest Rate: <?php echo $default_interest_rate; ?>%</p>
            <p>Calculated Interest: $<?php echo number_format($calculated_interest, 2); ?></p>
            <p>Full Amount: $<?php echo number_format($full, 2); ?></p>
        </div>

        <!-- Button Group -->
        <div class="button-group">
            <button onclick="window.location.href='SavingUserDataUpdate.php'">Update</button>
            <button onclick="window.location.href='Home.php'">Home</button>
            <button onclick="window.location.href='logout.php'">Log Out</button>
            <button onclick="window.location.href='Login.php'">Switch Account</button>
        </div>
    </div>

</body>
</html>

<?php
// Close the database connection
$con->close();
?>
