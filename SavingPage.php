<!DOCTYPE html>
<html lang="en">
<head>

    <title>Saving Details Page</title>
    <link rel="stylesheet" href="SavingPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<header>
    <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <nav>
            <a href="Home.php">Home</a>
            <a href="Login.php">Personal</a>
            <a href="SavingPage.php">Saving</a>
            <a href="transaction.php">Translation</a>
            <a href="CardPage">Card</a>
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

    <!-- Main Container -->
    <div class="main-container">
        <div class="hero-banner">
            <img src="images\5.jpg" alt="Banner Image">
        </div>

        <div class="savings-options">
            <button>Regular Saving</button>
            <button>High Yield Saving</button>
        </div>

        <div class="account-info">
            <div class="description">
                <h3>OverView</h3>
                <p> basic financial product that allows you to safely store your money while earning interest on your balance. It offers flexibility and easy access to your funds, making it 
                    an ideal choice for individuals looking to manage their day-to-day finances or set aside money for future needs.</p>
            </div>
            <br><br>
            <hr>
            <div class="account-features">
                <h3>Account Features</h3>
                <p>-Low minimum balance to open the account.
                    <br>
                   -24/7 online and mobile banking access for easy transactions.
                   <br>
                   -Secure deposits insured up to a specified amount.
                   <br>
                   -Competitive interest rates to help your savings grow.
                </p>
            </div>
            <br><br>
            <hr>
            <div class="eligibility">
                <h3>Eligibility</h3>
                <p>-Must be 18 years or older
                    <br>
                   -Must be a resident of the country where the bank operates.
                   <br>
                   -Valid identification proof (such as NIC/Passport) and proof of address.
                </p>
            </div>
            <br><br>
            <hr>
            <div class="special-benefits">
                <h3>Special Benefits</h3>
                <p>-Higher interest rates for maintaining a larger balance.
                    <br>
                   -Easy upgrade options to premium accounts for additional benefits. 
                </p>
            </div>
        </div>

        <div class="get-started">
        <button><a href="User-Saving.php" class="click">Get Started</a></button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
    <div class="footer-section">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="Contact.php">Contact Us</a><br>
            <a href="Help.php">Help & Support</a><br>
            <a href="AboutUs">About Us</a>
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
