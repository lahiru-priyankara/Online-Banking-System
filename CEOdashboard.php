<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEO Dashboard</title>
    <link rel="stylesheet" href="EMPdashboard.css">
</head>
<body>
    <header>
        <div class="logo">X BANK</div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <div class="header-right">
            <button>Notify</button>
            <button>E-Mail</button>
            <button onclick="window.location.href='EMPlogout.php'">Log Out</button>
        </div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="#current-account-section">Current Accounts</a></li>
                <li><a href="#saving-account-section">Saving Accounts</a></li>
                <li><a href="#help-contact">Help & Contact</a></li>
            </ul>
        </nav>

        <main>
            <h1>CEO Dashboard</h1>

            <section class="dashboard">
                <div class="dashboard-item">
                    <h2>Current Users</h2>
                    <div class="graph">Graph</div>
                </div>
                <div class="dashboard-item">
                    <h2>Saving Users</h2>
                    <div class="graph">Graph</div>
                </div>
            </section>

            <!-- Current Account Section -->
            <section id="current-account-section" class="account-details">
                <h2>Current Account Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Account No</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Define the SQL query
                        $sql = "SELECT 
                                    user_data.user_id, 
                        user_data.FullName, 
                        accounts.AccountNo, 
                        accounts.Balance, 
                        accounts.AccountType
                                FROM 
                                    user_data
                                INNER JOIN 
                                    accounts ON user_data.user_id = accounts.user_id
                                WHERE 
                                    accounts.AccountType IN ('Saving', 'Current');";


                        // Execute the query
                        $res = mysqli_query($con, $sql);
                        // Check if rows exist
                        if(mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['FullName']); ?></td>
                                    <td><?php echo htmlspecialchars($row['AccountNo']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Balance']); ?></td>
                                    <td><a href="UserDataView.php?user_id=<?php echo $row['user_id']; ?>&account_type=<?php echo $row['AccountType']; ?>">
                                    <button>View</button>
                                    </a>
                                
                                    <a href="UserdataUpdate.php?user_id=<?php echo $row['user_id']; ?>&account_type=<?php echo $row['AccountType']; ?>">
                                    <button>Update</button>
                                    </a>
                                
                                    
                                    <a href="Deleteform.php?user_id=<?php echo $row['user_id']; ?>">
                                    <button>delete</button>
                                    </a>
                                    </td>
                                    </tr>
                                    
                                
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='3'>No Result</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>

            <!-- Saving Account Section -->
            <section id="saving-account-section" class="saving-details">
                <h2>Saving Account Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>FullName</th>
                            <th>Account No</th>
                            <th>Balance</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Define the SQL query
                        $sqls = "SELECT 
                        savingaccount_data.saving_id, 
                        savingaccount_data.FullName, 
                        accounts.AccountNo, 
                        accounts.Balance, 
                        accounts.AccountType
                                FROM 
                                    savingaccount_data
                                INNER JOIN 
                                    accounts ON savingaccount_data.saving_id = accounts.saving_id
                                WHERE 
                                    accounts.AccountType IN ('Saving', 'Current');";


                        // Execute the query
                        $ress = mysqli_query($con, $sqls);
                        // Check if rows exist
                        if(mysqli_num_rows($ress) > 0) {
                            while($rows = mysqli_fetch_assoc($ress)) {
                                ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($rows['FullName']); ?></td>
                                    <td><?php echo htmlspecialchars($rows['AccountNo']); ?></td>
                                    <td><?php echo htmlspecialchars($rows['Balance']); ?></td>
                                    <td><a href="SavingUserDataView.php?saving_id=<?php echo $rows['saving_id']; ?>&account_type=<?php echo $rows['AccountType']; ?>">
                                    <button>View</button>
                                    </a>
                                
                                    <a href="SavingUserDataUpdate.php?saving_id=<?php echo $rows['saving_id']; ?>&account_type=<?php echo $rows['AccountType']; ?>">
                                    <button>Update</button>
                                    </a>
                                
                
                                    <a href="Deleteform1.php?saving_id=<?php echo $rows['saving_id']; ?>">
                                    <button>delete</button>
                                    </a>
                                    </td>
                                    </tr>
                                    
                                
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='3'>No Result</td></tr>";
                        }
                        ?>

                    </tbody>
                </table>           
            <section >
               
            <!-- Employee Account Section -->
<section id="Employee-data-section" class="Employee-details">
    <h2>Employee Details</h2>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Employee Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            $sqle = "SELECT 
                        employee_data.Employee_ID, 
                        employee_data.FullName, 
                        employee_data.EmployeeType
                    FROM 
                        employee_data"; 

    
            $rese = mysqli_query($con, $sqle);

            if(mysqli_num_rows($rese) > 0) {
                while($rowe = mysqli_fetch_assoc($rese)){
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($rowe['FullName']); ?></td>
                        <td><?php echo htmlspecialchars($rowe['EmployeeType']); ?></td>
                        <td>
                            <a href="EmployeeDataView.php?Employee_ID=<?php echo $rowe['Employee_ID']; ?>">
                                <button>View</button>
                            </a>
                        
                        
                        <a href="Deleteform2.php?Employee_ID=<?php echo $rowe['Employee_ID']; ?>">
                        <button>delete</button>
                        </a>
                        </td>
                        
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>No Result</td></tr>";
            }
        ?>
        </tbody>
    </table>           
</section>

        </main>
    </div>
</body>
</html>
