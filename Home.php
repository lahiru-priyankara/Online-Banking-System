<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
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
    <!-- Hero -->
    <section id="hero">
        <img src="images\03.jpg" alt="hero-image" class="hero-img">
        <div class="container">
            <div class="info">
                <h1>Ringing Style And Comfort For Customer Satisfaction</h1>
                <p> X Online Banking enables you to perform a host of banking 
                    functions at the comfort of your home or office around the clock. 
                    Be enabled with X Online Banking today!</p>
                <a href="Register.php" class="click">Get Started</a>
                <a href="Login.php" class="click">Log in</a>
            </div>
        </div>
    </section>  
    <!-- Description -->
    <section class="description">
        <div class="text">
            <h2>OverView</h2>
            <p>The new X Online Banking gives you complete control over your finances with a variety of banking services at your fingertips, allowing you to manage your accounts 24/7 from wherever you want. You are empowered to do your banking online with a wide array of services such as create goal setting savings, open fixed deposits and Savings Accounts, 
                block your credit cards, configure required X alert services and select your own preferred user ID.</p>
                <button onclick="location.href='AboutUs.php'">Lern more</button>
        </div>
        <img src="images\04.jpg" alt="Placeholder for image">
    </section>
    <!-- Why Choose Us Section -->
    <section class="why-choose">
    <h2>Why Choose Us</h2>
    <div class="boxes">
        <div class="box">
            <img src="images\A.jpg" alt="Image 1" class="box-img">
            <div class="overlay"><b>24/7 Access</b></div>
            <p class="box-text">Manage your finances anytime, anywhere with round-the-clock access to your accounts and services.
            </p>
        </div>
        <div class="box">
            <img src="images\B.jpg" alt="Image 2" class="box-img">
            <div class="overlay"><b>Easy Fund Transfers</b></div>
            <p class="box-text"> Transfer money between accounts or send funds to friends and family with just a few clicks.
            </p>
        </div>
        <div class="box">
            <img src="images\aa.jpg" alt="Image 3" class="box-img">
            <div class="overlay"><b>Customer Support</b></div>
            <p class="box-text">Get fast and reliable support from our dedicated customer service team through chat, phone, or email.
            </p>
        </div>
        <div class="box">
            <img src="images\D.jpg" alt="Image 4" class="box-img">
            <div class="overlay"><b>Account Overview</b></div>
            <p class="box-text">View a summary of all your accounts in one place, allowing you to track your balances and spending easily.</p>
        </div>
    </div>
    <br><br><br>

</section>
    <section class="FA">
    <h2>Financial Advices</h2>
    <div class="boxes">
        <div class="box">
            <img src="images\ab.gif" alt="Image 1" class="box-img">
            
            <p class="box-text">Smart Budgeting Tips</p>
            <br>
            
        </div>
        <div class="box">
            <img src="images\bb.gif" alt="Image 2" class="box-img">
            <p class="box-text">Managing Debt</p>
            <br>
                        
        </div>
        <div class="box">
            <img src="images\cc.gif" alt="Image 3" class="box-img">
            <p class="box-text">Building Credit</p>
            <br>
        </div>
    </div>
</section>
<br><br><br>
<footer>
    <div class="footer-section">
        <div class="logo">
            <img src="images\logo.png" alt="Logo">
        </div>
        <div class="services">
            <h3>Services</h3>
            <a href="Contact.php">Contacy Us</a><br>
            <a href="Help.php">Help & Support</a><br>
            <a href="AboutUs.php">About</a>
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
