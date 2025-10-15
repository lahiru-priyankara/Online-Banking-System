<?php
include('connection.php'); // Include your database connection

// Get the user_id from the URL
if (isset($_get['user_id'])) {
    $user_id = $_get['user_id'];

    // Fetch user details from the database
    $sql = "SELECT 
                user_data.FullName, 
                user_data.Email, 
                user_data.PhoneNo, 
                accounts.AccountNo, 
                accounts.Balance 
            FROM 
                user_data 
            INNER JOIN 
                accounts ON user_data.user_id = accounts.user_id 
            WHERE 
                user_data.user_id = '$user_id'";

    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "No user found.";
        exit();
    }
} else {
    echo "Error: No user ID provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <h1>User Profile</h1>
    
    <div class="user-details">
        <p><strong>Full Name:</strong> <?php echo htmlspecialchars($user['FullName']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['Email']); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($user['PhoneNo']); ?></p>
        <p><strong>Account No:</strong> <?php echo htmlspecialchars($user['AccountNo']); ?></p>
        <p><strong>Balance:</strong> <?php echo htmlspecialchars($user['Balance']); ?></p>
    </div>

    <a href="employee-dashboard.php">Back to Dashboard</a>
</body>
</html>
