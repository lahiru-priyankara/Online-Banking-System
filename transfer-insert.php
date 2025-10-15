<?php
require 'connection.php'; // Include database connection

// Get input values from the form
$sender_account_no = $_POST['from_account_no'];

$recipient_account_no = $_POST['to_account_no'];
$transfer_amount = $_POST['amount'];

// Check sender's balance
$sender_balance_query = "SELECT Balance FROM accounts WHERE AccountNo = $sender_account_no";
$sender_result = $con->query($sender_balance_query);
$sender_row = $sender_result->fetch_assoc();
$sender_balance = $sender_row['Balance'];

if ($sender_balance >= $transfer_amount) {
    // Deduct from sender's account
    $con->query("UPDATE accounts SET Balance = Balance - $transfer_amount WHERE AccountNo = $sender_account_no");

    // Add to recipient's account
    $con->query("UPDATE accounts SET Balance = Balance + $transfer_amount WHERE AccountNo = $recipient_account_no");

    // Log the transaction for the sender
    
    $con->query("INSERT INTO transactions (TransactionID, AccountNo,TransactionType, Amount, TransactionDate) 
                 VALUES ('',$recipient_account_no, 'Withdraw', $transfer_amount, NOW())");


header("Location: transaction.php?sender_account_no=$sender_account_no");
    
} else {
    echo "Insufficient balance.";
}

$con->close();
?>
