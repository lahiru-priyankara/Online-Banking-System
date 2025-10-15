<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    
    body {
    font-family: Arial, sans-serif;
    margin: 0px;
    padding: 0px;

}

header {
    background-color: #283747;
    padding: 7px 7px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    width: 50px;
}

nav {
    display: flex;
    gap: 20px;
    align-items: center;
    padding: 0px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    padding: 5px;
}

nav a:hover {
    text-decoration: underline;
}

.search-bar {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search-bar input[type="text"] {
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.search-bar button {
    padding: 5px 10px;
    background-color: #283747;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.search-bar button:hover {
    background-color: #555;
}

.notification-btn {
    background: none;
    border: none;
    font-size: 20px;
    color: white;
    cursor: pointer;
}

.notification-btn .fas {
    color: white;
}

.notification-btn:hover .fas {
    color: #ffcc00;
}

main {
    padding: 20px;
    background-color: white;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 1200px; /* Centering main content */
}

.contact-info {
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
    background-color: #f9f9f9; /* Light background for info items */
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.info-item .icon-placeholder {
    width: 50px;
    height: 50px;
    background-color: #ccc;
    border-radius: 50%; /* Circle for icons */
    margin-right: 20px;
}

.feedback-form {
    margin-top: 20px;
}

.feedback-form h2 {
    margin-bottom: 20px;
}

.feedback-form form {
    display: flex;
    flex-direction: column;
}

.form-group {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.form-group input {
    width: 48%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #283747; /* Focus color */
}

textarea {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    height: 100px;
    transition: border-color 0.3s;
}

textarea:focus {
    border-color: #283747; /* Focus color */
}

button {
    padding: 10px 20px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #555; /* Hover color */
}

footer {
    background: #283747;
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.footer-section {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.footer-section .logo img {
    width: 150px;
}

.footer-section h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #fff;
}

.footer-section a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s;
}

.footer-section a:hover {
    color: #ffcc00; /* Change link color on hover */
}

.footer-terms {
    margin-top: 30px;
    font-size: 14px;
}

.footer-terms a {
    color: #ddd;
    text-decoration: none;
}

.footer-terms a:hover {
    text-decoration: underline; /* Underline on hover */
}

.social-media a img {
    width: 40px; 
    height: auto;
    margin: 0 10px; 
    transition: transform 0.3s ease;
}

.social-media a img:hover {
    transform: scale(1.1); /* Scale effect on hover */
}


</style>
</head>
<body>
    <!-- Header-->
    <header>
    <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <nav>
            <a href="Home.php">Home</a>
            <a href="User-Login-insert.php">Personal</a>
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
    <main>
        <section class="contact-info">
            <div class="info-item">
                <p>General Numbers : 075 2683430</p>
            </div>
            <div class="info-item">
                <p>XBankOfficial@gmail.com</p>
            </div>
            <div class="info-item">
                <p>No 406 , colombo2</p>
            </div>
        </section>

        <!-- Feedback Form Section -->
        <section class="feedback-form">
            <h2>Share Your Feedback</h2>
            <form method="POST" action="Feedback-insert.php" >
                <div class="form-group">
                    <input type="text" placeholder="Full Name" name="Fname">
                    <input type="email" placeholder="E-mail" name="email">
                </div>
                <textarea placeholder="Your feedback" name="area"></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
    <div class="footer-section">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="Contact.php">Contact.Us</a><br>
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