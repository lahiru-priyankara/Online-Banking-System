<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

.hero-banner {
    width: 100%;
    height: 400px;
    overflow: hidden;
    margin-bottom: 30px;
}

.hero-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

        .about-section {
            text-align: center;
            margin: 30px 0;
            font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        .about-section p {
            margin-bottom: 30px;
            font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        .vision-mission {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        .vision-mission .box {
            width: 40%;
            background-color: #f5ad61;
            padding: 50px;
            text-align: center;
        }

        /* Core Values Section */
        .core-values {
            text-align: center;
            margin-bottom: 50px;
        }

        .core-values .box {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            background-color: #d0d0d0;
        }

        /* Our Team Section */
        .team-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .team-section .team-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .team-section .team-member {
            width: 150px;
            height: 200px;
            background-color: #d0d0d0;
            padding: 20px;
            margin-bottom: 20px;
        }

        /* Contact Us Button */
        .contact-us {
            text-align: center;
            margin-bottom: 50px;
        }

        .contact-us button {
            padding: 10px 20px;
        }

        footer {
    background-color: #333;
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
}

.footer-section a:hover {
    text-decoration: underline;
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
    text-decoration: underline;
}

.social-media a img {
    width: 40px; 
    height: auto;
    margin: 0 10px; 
    transition: transform 0.3s ease;
}
.social-media a img:hover {
    transform: scale(1.1); 
}

    </style>
</head>
<body>
    <!-- Navigation Bar -->
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

    <!-- Header Section -->
    <div class="hero-banner">
            <img src="images\DD.jpg" alt="Banner Image">
        </div>

    <!-- About Bank Section -->
    <div class="about-section">
        <h2>About Bank</h2>
        <p>X Bank, we are committed to providing innovative financial solutions that cater to the diverse needs of our community. 
            With a focus on personalized services, we aim to empower individuals and businesses to achieve their financial goals with trust and reliability.</div>

    <!-- Vision & Mission Section -->
    <div class="vision-mission">
        <div class="box">
            <h3>Vision</h3>
            <P>
            "To be the most trusted and customer-centric bank in Sri Lanka, leading the way in innovation and financial empowerment for every individual and business in our community."
            </p>
        </div>
        <div class="box">
            <h3>Mission</h3>
            <p>
            "Our mission is to deliver exceptional banking experiences by offering tailored financial solutions, fostering long-term 
            relationships, and continuously innovating to meet the evolving needs of our customers, while upholding the highest standards of integrity and excellence."


            </p>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="team-section">
        <h2>Our Team</h2>
        <div class="team-grid">
            <div class="team-member"></div>
            <div class="team-member"></div>
            <div class="team-member"></div>
            <div class="team-member"></div>
            <div class="team-member"></div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
    <div class="footer-section">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="Contact.php">Contact Us</a><br>
            <a href="Help.php">Help & Support</a><br>
            <a href="#">Link 3</a>
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