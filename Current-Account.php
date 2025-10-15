<?php
require 'connection.php'; 


session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    echo "Error: User not logged in.";
    exit();
}
$accountSQL = "SELECT * FROM accounts WHERE user_id = '$user_id' AND AccountType = 'Current'";
$accountResult = $con->query($accountSQL);

if ($accountResult->num_rows > 0) {
    $accountData = $accountResult->fetch_assoc();
} else {
    echo "Error: No current account found for this user.";
    exit();
}

$userSQL = "SELECT * FROM user_data WHERE user_id = '$user_id'";
$userResult = $con->query($userSQL);

if ($userResult->num_rows > 0) {
    $userData = $userResult->fetch_assoc();
} else {
    echo "Error: User information not found.";
    exit();
}

$accountNo = $accountData['AccountNo'];
$transactionSQL = "SELECT * FROM transactions WHERE AccountNo = '$accountNo'";
$transactionResult = $con->query($transactionSQL);



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
    <!-- Main-->
    <div class="container">
        <h1>My Personal Account</h1>

        <!-- Account Information -->
        <div class="info-box">
            <h3>Account Information</h3>
            <p>Account No: <?php echo $accountData['AccountNo']; ?></p>
            <p>Account Type: <?php echo $accountData['AccountType']; ?></p>
            <p>Account Balance: $<?php echo $accountData['Balance']; ?></p>
            <p>Available Balance: $<?php echo $accountData['Balance']; // Example calculation ?></p>
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
        
        <div class="info-box">
            <h3>Transaction History</h3>

            <?php
            if ($transactionResult->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr><th>ToName</th><th>Transaction Type</th><th>Amount</th><th>Trnsaction Date</th></tr>";
                while ($transaction = $transactionResult->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $transaction['ToName'] . "</td>";
                    echo "<td>" . $transaction['TransactionType'] . "</td>";
                    echo "<td>$" . $transaction['Amount'] . "</td>";
                    echo "<td>" . $transaction['TransactionDate'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No transactions found for this account.</p>";
            }
            ?>

        </div>
        <div class="button-group">
            <button onclick="window.location.href='UserDataUpdate.php'">Update</button>
            <button onclick="window.location.href='Home.php'">Home</button>
            <button onclick="window.location.href='logout.php'">Log Out</button>
            <button onclick="window.location.href='Login.php'">Switch Account</button>
        </div>
    </div>
</body>
</html>

<?php

$con->close();
?>
