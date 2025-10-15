-- Table to store user data
CREATE TABLE user_data (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(30),
    NameWinitials VARCHAR(30),
    DOB DATE,
    Gender CHAR(5),
    NIC_Passport VARCHAR(15),
    PhoneNo VARCHAR(10),
    Email VARCHAR(30),
    A_street VARCHAR(20),
    City VARCHAR(20),
    Country VARCHAR(20),
    EntryPayment FLOAT(10, 2),
    UPassword VARCHAR(32),
    ReEnterPassword VARCHAR(32)
);

-- Table to store employee data
CREATE TABLE Employee_Data (
    Employee_ID INT AUTO_INCREMENT PRIMARY KEY,
    EmployeeType VARCHAR(10),
    FullName VARCHAR(30),
    Gender CHAR(5),
    NIC_Passport VARCHAR(15),
    PhoneNumber VARCHAR(10),
    Email VARCHAR(30),
    EPassword VARCHAR(32)
);

-- Table for regular user login
CREATE TABLE RegularUser_Login (
    CLoginID INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, 
    AccountType VARCHAR(10),
    NIC_Passport VARCHAR(15),
    LPassword VARCHAR(32),
    LastLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user_data(user_id) ON DELETE CASCADE
);

-- Table for saving account processes
CREATE TABLE SavingAccount_Data (
    saving_id INT AUTO_INCREMENT PRIMARY KEY, 
    FullName VARCHAR(30),
    NameWinitials VARCHAR(30),
    DOB DATE,
    Gender CHAR(5),
    Nationality VARCHAR(10),
    NIC_Passport VARCHAR(15),
    A_street VARCHAR(20),
    City VARCHAR(20),
    Country VARCHAR(20),
    PhoneNo VARCHAR(10),
    Email VARCHAR(30),
    EmployeeStatus VARCHAR(20),
    EmployerName VARCHAR(20),
    EmployerAddress VARCHAR(30),
    AnnualIncome FLOAT(10, 2),
    SourceOfFunds VARCHAR(30),
    SavingType VARCHAR(10),
    InitialDepositAmount FLOAT(10, 2),
    SPassword VARCHAR(32),
    ReEnterPassword VARCHAR(32)
);

-- Table for saving account login
CREATE TABLE SavingUser_Login (
    SLoginID INT AUTO_INCREMENT PRIMARY KEY,
    saving_id INT, 
    AccountType VARCHAR(10),
    NIC_Passport VARCHAR(15),
    LPassword VARCHAR(32),
    LastLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (saving_id) REFERENCES SavingAccount_Data(saving_id) ON DELETE CASCADE
);

-- Table for admin login
CREATE TABLE Admin_Login (
    ALoginID INT AUTO_INCREMENT PRIMARY KEY,
    Employee_ID INT,
    AdminType VARCHAR(10),
    NIC_Passport VARCHAR(15),
    APassword VARCHAR(32),
    LastLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (Employee_ID) REFERENCES Employee_Data(Employee_ID) ON DELETE CASCADE
);

-- Table for accounts
CREATE TABLE Accounts (
    AccountNo INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, -- For regular users from user_data
    saving_id INT, -- For saving account users from SavingAccount_Data
    AccountType VARCHAR(10),
    Balance DECIMAL(15, 2),
    FOREIGN KEY (user_id) REFERENCES user_data(user_id) ON DELETE CASCADE,
    FOREIGN KEY (saving_id) REFERENCES SavingAccount_Data(saving_id) ON DELETE CASCADE
);

-- Table for transactions
CREATE TABLE Transactions (
    TransactionID INT AUTO_INCREMENT PRIMARY KEY,
    AccountNo INT,
    TransactionType VARCHAR(20), -- e.g., 'Deposit', 'Withdrawal', 'Transfer'
    Amount DECIMAL(15, 2),
    TransactionDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (AccountNo) REFERENCES Accounts(AccountNo) ON DELETE CASCADE
);

-- Table for interest rates
CREATE TABLE Interest_Rates (
    InterestRateID INT AUTO_INCREMENT PRIMARY KEY,
    AccountType VARCHAR(20), -- e.g., 'Saving', 'Current'
    InterestRate DECIMAL(5, 4) -- e.g., 0.0350 for 3.50%
);

-- Table for feedback
CREATE TABLE FeedBack (
    feedback_id INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(30),
    email VARCHAR(30),
    feedback VARCHAR(100)
);
