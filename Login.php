<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="loguser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Header -->
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

    <!-- Main Container -->
    <div class="container">
        <div class="login-container">
            <!-- User Login Form -->
            <div class="login-form">
                <h2>User</h2>
                <form method="post" action="User-Login-insert.php">
                    <label for="AccountType">Account Type</label>
                    <select id="accountype" name="accounttype">
                        <option value="current">Current</option>
                        <option value="saving">Saving</option>
                    </select>
                    <br>

                    <label for="user-nic">NIC no / Passport</label>
                    <input type="text" id="user-nic" name="user-nic">

                    <label for="user-password">Password</label>
                    <input type="password" id="user-password" name="user-password">

                    <a href="#" class="forgot-password">Forgot password</a>

                    <div class="button-group">
                    <button type="button" onclick="window.location.href='verification.php'">Verify</button>
                    <button type="submit">Log in</button>
                    </div>
                </form>
            </div>

            <!-- Admin Login Form -->
            <div class="login-form">
                <h2>Admin</h2>
                <form method="post" action="Admin-Login-insert.php">
                    <label for="admin-type">Admin Type</label>
                    <select id="admin-type" name="admin-type">
                    <option value="Accountent">Accountent</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                    </select>

                    <label for="admin-nic">NIC / Passport</label>
                    <input type="text" id="admin-nic" name="admin-nic">

                    <label for="admin-password">Password</label>
                    <input type="password" id="admin-password" name="admin-password">

                    <a href="#" class="forgot-password">Forgot password</a>

                    <div class="button-group">
                        <button type="submit">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register button -->
    <div class="registercenter">
    <button onclick="location.href='Register.php'">Register</button>
        <p>Register for New User</p>
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
                <a href="Help.php">Help & S</a><br>
                <a href="AboutUs.php">About Us</a>
            </div>
            <div class="social-media">
                <h3>Social Media</h3>
                <a href="#"><img src="images\f.png" alt="Facebook"></a>
                <a href="#"><img src="images\T.png" alt="Twitter"></a>
                <a href=""><img src="images\I.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-terms">
            <br>
            <a href="#">Privacy & Policy</a> | <a href="#">Terms & Condition</a>
        </div>
    </footer>

</body>
</html>
