<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT</title>
    <link rel="stylesheet" type="text/css" href="cart.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <header>
        <a href="#" class="logo">Munch<span>Box</span></a>
        <nav>
            <div class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="home.php">About</a></li>
                    <li><a href="home.php">Menu</a></li>
                    <li><a href="home.php">Contact</a></li>
                </ul>
            </div>
        </nav>

  <div class="box">
    
    <form action="https://formspree.io/f/xrgvanvb" method="POST">
      <div class="header">Checkout</div><br>

      <label for="dish">Dish:</label><br>
    <input class="text" id="dish" name="Dish" value="Burger N1500"><br><br> 

    <label for="first_name">First name:</label><br>
    <input class="text" id="first_name" name="First Name" placeholder="e.g Moses" required><br><br>  
    
    <label for="lname">Last name:</label><br>
    <input class="text" id="last_name" name="Last Name" placeholder="e.g Tseda" required><br><br>
    
    <label for="p_number">Phone Number:</label><br>
    <input class="text" id="phone_number" name="Phone Number" placeholder="e.g 08069619790"><br><br>
    
    <label for="address">Address:</label><br>
    <input class="text" id="address" name="Address" placeholder="e.g New Boys Hostel"><br><br>
    
    <label for="payment_method">Payment Method:</label><br>
    <input class="text" id="payment_method" name="Payment Method" placeholder="e.g Cash or POS"><br><br>
    

    <button type="submit">Place Order</button>
    </form>

  </div>

</body>
</html>