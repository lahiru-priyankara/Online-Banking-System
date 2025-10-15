<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration Page</title>
    <link rel="stylesheet" href="UserDataUpdate.css">
</head>
<body>
            <!-- User Registration Form -->
            <div class="Userdata-Update">
                <h2>Update User Data</h2>
                <form method="post" action="UserDataUpdate-insert.php">
                    <label for="ID">ID Number</label>
                    <input type="text" id="ID" name="ID">
                    
                    <label for="full-name">Name in Full</label>
                    <input type="text" id="full-name" name="full-name">

                    <label for="initials">Name with Initials</label>
                    <input type="text" id="initials" name="initials">

                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob">
                    <br><br>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label for="nic">NIC/Passport No</label>
                    <input type="text" id="nic" name="nic">

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone">

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">

                    <label for="street">Street</label>
                    <input type="text" id="street" name="street">

                    <label for="city">City</label>
                    <input type="text" id="city" name="city">

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country">

                    <div class="button-group">
                        <button type="Submit">Submit</button>
                    </div>
                </form>
            </div>
    <footer>

</body>
</html>