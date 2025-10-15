<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="transaction.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<header>
    <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <nav>
            <a href="Home.php">Home</a>
            <a href="Login.php">Personal</a>
            <a href="SavingPage.php">Saving</a>
            <a href="transaction.php">Translation</a>
            <a href="CardPage.php">Card</a>
            <a href="Help.php">Help & Support</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Contact.php">Contact Us</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <button class="notification-btn">
            <i class="fa fa-bell"></i>
            <div class="notification-count"></div>
        </button>
    </header>
<body>
    <main>
        <section class="transfer-section">

            <div class="transfer-form">
                <h2>Transfer Money</h2>
                <form id="transferForm" action="transfer-insert.php" method="POST">
     <label for="from-account-no">Sender Account No:</label>
     <input type="number" id="from-account-no" name="from_account_no" required><br><br>

    <label for="to-account-name">Recipient Account Name:</label>
     <input type="text" id="to-account-name" name="to_account_name"><br><br>

    <label for="to-account-no">Recipient Account No:</label>
    <input type="number" id="to-account-no" name="to_account_no" required><br><br>

    <label for="amount">Amount to Transfer:</label>
     <input type="number" id="amount" name="amount" required><br><br>

     <button type="submit">Transfer</button>
                </form>
            </div>
        </section>

        <section class="transaction-details">
            <h2>Transaction Details</h2>
            <div class="details">
                <?php
            
                if (isset($_GET['sender_account_no'])) {
                    require 'connection.php'; 

                    $sender_account_no = $_GET['sender_account_no'];

                    
                    $transaction_query = "SELECT TransactionID, AccountNo, TransactionType, Amount, TransactionDate 
                                          FROM transactions 
                                          WHERE AccountNo = $sender_account_no 
                                          ORDER BY TransactionDate DESC 
                                          LIMIT 1";
                    $transaction_result = $con->query($transaction_query);

                     if ($transaction_result->num_rows > 0) {
                        $transaction_row = $transaction_result->fetch_assoc();

                    
                     echo "<p><strong>Transaction ID:</strong> " . $transaction_row['TransactionID'] . "</p>";
                     echo "<p><strong>Sender Account No:</strong> " . $transaction_row['AccountNo'] . "</p>";
                       echo "<p><strong>Transaction Type:</strong> " . $transaction_row['TransactionType'] . "</p>";
                     echo "<p><strong>Amount Transferred:</strong> $" . $transaction_row['Amount'] . "</p>";
                    echo "<p><strong>Date:</strong> " . $transaction_row['TransactionDate'] . "</p>";
                    } else {
                        echo "<p>No transactions found for this account.</p>";
                    }

                    $con->close();
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer-->
    <footer>
    <div class="footer-section">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="Contact.php">Contacy Us</a><br>
            <a href="Help.php">Help & Support</a><br>
            <a href="AboutUs.php">About US</a>
        </div>
        <div class="social-media">
            <h3>Social Media</h3>
            <a href="#"><img src="images\f.png" alt="Facebook"></a>
            <a href="#"><img src="images\T.png" alt="Twitter"></a>
            <a href="#"><img src="images\I.png" alt="Instagram"></a>
        </div>
    </div>
    <div class="footer-terms">
        <br>
        <a href="#">Privacy & Policy</a> | <a href="#">Terms & Condition</a>
    </div>
</footer>

</body>
</html>
