<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration Page</title>
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        // Function to show or hide password
        function togglePassword() {
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirm-password");
            if (document.getElementById("show-password").checked) {
                password.type = "text";
                confirmPassword.type = "text";
            } else {
                password.type = "password";
                confirmPassword.type = "password";
            }
        }
    </script>
    
</head>
<body>
    <!-- Header -->
    <header>
    <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Personal</a>
            <a href="#">Saving</a>
            <a href="#">Translation</a>
            <a href="#">Card</a>
            <a href="#">Help & Support</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
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
            <!-- User Registration Form -->
            <div class="registration-form">
                <h2>User Registration</h2>
                <form method="post" action="User-Register-insert.php">
                    <label for="full-name">Name in Full</label>
                    <input type="text" id="full-name" name="full-name" required>

                    <label for="initials">Name with Initials</label>
                    <input type="text" id="initials" name="initials" required>

                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                    <br><br>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label for="nic">NIC/Passport No</label>
                    <input type="text" id="nic" name="nic" required>

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>

                    <label for="street">Street</label>
                    <input type="text" id="street" name="street" required>

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>

                    <label for="payment">Entry Payment</label>
                    <input type="text" id="payment" name="payment" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="confirm-password">Re-enter Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>

                    <div class="checkbox">
                        <input type="checkbox" id="show-password" name="show-password" onclick="togglePassword()">
                        <label for="show-password">Show Password</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" id="existing-customer" name="existing-customer">
                        <label for="existing-customer">I am an existing customer</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                        <label for="privacy-policy">I accept the privacy policy</label>
                    </div>

                    <div class="button-group">
                        <button type="button">Verify</button>
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
    <footer>
    <div class="footer">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="#">Link 1</a><br>
            <a href="#">Link 2</a><br>
            <a href="#">Link 3</a>
        </div>
        <div class="social-media">
            <h3>Social Media</h3>
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        </div>
    </div>
    <div class="terms">
        <br>
        <a href="#">Privacy & Policy</a> | <a href="#">Terms & Condition</a>
    </div>
</footer>

</body>
</html>
