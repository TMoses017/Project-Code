<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUNCH BOX</title>
    <link rel="stylesheet" type="text/css" href="tom.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <!---header section--->
    <header>
        <a href="#" class="logo">Munch<span>Box</span></a>
        <nav>
            <div class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
   

    <div class="icons">
        <a href="#"><i class='bx bx-search-alt'></i></a>
        <a href="#"><i class='bx bx-cart' ></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
    </header>

    <!---home section--->
    <section class="home" id="home">
        <div class="home-text">
            <h1><span>Welcome</span> to Munch Box</h1>
            <p>You Crave, We Make</p>
            <a href="#menu" class="btn">Select a Dish</a>
        </div>

        <div class="home-img">
            <img src="Images/Munch Box.jpg">
        </div>

    </section>

    <!---about section--->
    <section class="about" id="about">
        <div class="about-img">
            <img src="Images/Jollof-Rice.png">
        </div>
        <div class="about-txt">
            <h2>About Us</h2>
            <p>Munch Box is a fast food restaurant established in 2022 at Bingham University<br>Our essence is to serve students quality food at affordable prices in a 
            clean and comfortable environment</p>

        </div>
    </section>

    <!---menu section--->
    <section class="menu" id="menu">
        <div class="main-text">
            <h2>Main Dishes</h2>
            <p>Here are some of the main dishes served at Munch Box</p>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Jollof Rice.jpeg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Jollof Rice</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N600</h5>
                    </div>
                    <div class="button">
                        <a href="jollof rice.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Arabian Rice.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Arabian Rice</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N700</h5>
                    </div>
                    <div class="button">
                        <a href="arabian rice.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Sausage Fried Rice.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Sausage Fried Rice</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N700</h5>
                    </div>
                    <div class="button">
                        <a href="sausage fried rice.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="menu-content">
            <div class="row">
                <img src="Images/Chicken Parts.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Chicken Parts</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N1000</h5>
                    </div>
                    <div class="button">
                        <a href="chicken parts.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Chicken Wings.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Chicken Wings</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N1000</h5>
                    </div>
                    <div class="button">
                        <a href="chicken wings.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Chips.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Chips</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N500</h5>
                    </div>
                    <div class="button">
                        <a href="chips.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Pasta.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Pasta</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N800</h5>
                    </div>
                    <div class="button">
                        <a href="pasta.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Fajita.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Fajita</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N1500</h5>
                    </div>
                    <div class="button">
                        <a href="fajita.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-text">
            <h2>Snacks</h2>
            <p>Here are some of the Snacks served at Munch Box</p>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Shawarma.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Shawarma</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N1500</h5>
                    </div>
                    <div class="button">
                        <a href="shawarma.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Hot Dog.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Hot Dog</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N500</h5>
                    </div>
                    <div class="button">
                        <a href="hotdog.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <div class="row">
                <img src="Images/Burger.jpg">
                <div class="menu-text">
                    <div class="menu-left">
                        <h4>Burger</h4>
                    </div>
                    <div class="menu-right">
                        <h5>N1500</h5>
                    </div>
                    <div class="button">
                        <a href=" burger.php" class="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

     <!---contact section--->
    <section class="contact" id="contact">
        <div class="main-contact">
            <div class="contact-content">
                <h4>Services</h4>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
            </div>
            
            <div class="contact-content">
                <h4>Contact & Follow Us</h4>
                <p>Phone: 08037009253</p><br>
                <p>Whatsapp: 08037009253</p><br>
                <p>Instagram: munchbox.bhu</p>
            </div>
        </div>
    </section>

    <div class="last-text">
        <p>2023 Tom Productions. All Rights Reserved by TOM</p>
    </div>

    <!----scroll up---->
    <a href="#home" class="scroll-up">
        <i class='bx bx-chevron-up'></i>
    </a>

    <!---custom js link--->
    <script type="text/javascript" src="js/tom.js"></script>

</body>
</html>