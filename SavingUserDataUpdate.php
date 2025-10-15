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
                <form method="post" action="SavingDataUpdate-insert.php">
                    <label for="id">ID Number</label>
                    <input type="text" id="id" name="id">
                    
                    <label for="full-name">Name in Full</label>
                    <input type="text" id="full-name" name="name">

                    <label for="initials">Name with Initials</label>
                    <input type="text" id="initials" name="name_ini">

                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dateOfB">
                    <br><br>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gen">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    
                    <label for="nation">Nationality</label>
                    <input type="text" id="nation" name="nation">
                    <br><br>

                    <label for="nic">NIC/Passport No</label>
                    <input type="text" id="nic" name="Nnic">
                    
                    <label for="street">Street</label>
                    <input type="text" id="street" name="Street">

                    <label for="city">City</label>
                    <input type="text" id="city" name="City">

                    <label for="country">Country</label>
                    <input type="text" id="country" name="Country">

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="Tphone">

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="Email">

                    <label for="empstatus">Employee Stetus</label>
                    <input type="empstatus" id="empstatus" name="empstatus">

                    <label for="empname">Employee Name</label>
                    <input type="empname" id="empname" name="empname">

                    <label for="empaddress">Employee Address</label>
                    <input type="empaddress" id="empaddress" name="empaddress">

                    <label for="Aincome">Annual Income</label>
                    <input type="Aincome" id="Aincome" name="Aincome">

                    <label for="Sfunds">Sourse Of Funds</label>
                    <input type="Sfunds" id="Sfunds" name="Sfunds">

                    <label for="Stype">Saving Type</label>
                    <input type="Stype" id="Stype" name="Stype">

                    

                    <div class="button-group">
                        <button type="Submit">Submit</button>
                    </div>
                </form>
            </div>
</body>
</html>