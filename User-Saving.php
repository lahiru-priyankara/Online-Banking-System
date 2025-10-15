<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Saving Account</title>
    <link rel="StyleSheet" href="savinguser.css">
</head>
<body>

<div class="container">
    <h2>Create Your Saving Account</h2>
    <form action="User-Saving-insert.php" method="POST">
        <!-- Personal Info -->
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="initials">Name with initials</label>
        <input type="text" id="initials" name="initials" required>

        <label for="dob">Date of Birth</label>
        <input type="text" name="date" placeholder="date" required>
            

        <label for="gender">Gender</label>
        <div>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        
        <label for="nationality">Nationality</label>
        <input type="text" id="nationality" name="nationality" required>

        <label for="nic">NIC / Passport No</label>
        <input type="text" id="nic" name="nic" required>

        <!-- Address Info -->
        <label for="street">Street</label>
        <input type="text" id="street" name="street" required>

        <label for="city">City</label>
        <input type="text" id="city" name="city" required>

        <label for="county">Country</label>
        <input type="text" id="country" name="country" required>


        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <!-- Employment Info -->
        <label for="employment">Employment Status</label>
        <input type="text" id="employment" name="employment" required>

        <label for="employer_name">Employer Name</label>
        <input type="text" id="employer_name" name="employer_name" required>

        <label for="employer_address">Employer Address</label>
        <input type="text" id="employer_address" name="employer_address" required>

        <label for="income">Annual Income</label>
        <input type="text" id="income" name="income" required>

        <label for="funds">Source of Funds</label>
        <input type="text" id="funds" name="funds" required>

        <!-- Account Details -->
        <label for="accounttype">Saving Account Type</label>
        <input type="text" id="accounttype" name="accounttype" required>

        <label for="deposit">Initial Deposit Amount</label>
        <input type="text" id="deposit" name="deposit" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Re-enter Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <div class="full-width">
            <input type="checkbox" id="details_correct" name="details_correct" required>
            <label for="details_correct">This all details are correct</label>
        </div>

        <div class="full-width">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Agree to terms and condition</label>
        </div>

        <div class="actions">
            <input type="reset" value="Clear">
            <input type="submit" value="Submit">
            <input type="button" value="Cancel" onclick="window.location.href='index.html';">
        </div>
    </form>
</div>

<div class="footer">
    <p>© Your Company Name | Privacy Policy | Terms & Conditions</p>
</div>

</body>
</html>
