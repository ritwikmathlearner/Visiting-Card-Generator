<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Card Generator - Home</title>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">Card Generator</div>
      <ul class="menu uppercase">
      <li><a href="index.php">Home</a></li>
        <li><a href="card.php">Cards</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php 
            if(!isset($_SESSION["customer"])) {
        ?>
        <li><a href="login.php">Login/Register</a></li>
        <?php 
            } else {
        ?>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="account.php">Account</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="header half-page">
      <h1 class="primary-heading">Contact Us</h1>
      <h2 class="secondary-heading">
        Get in touch and let us give you a hand with your queries
      </h2>
    </div>
    <div class="user-management">
        <h1 class="main-heading underline">
          Fill the form with your queries
        </h1>
        <form action="" class="user-form">
          <div>
            <label for="name">Name</label>
            <input type="Name" placeholder="Enter your full name" name="email">
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email" name="email">
          </div>
          <div>
            <textarea name="message" placeholder="Write your concern here"></textarea>
          </div>
          <input type="submit" value="Submit" name="login" class="uppercase">
          </form>
    </div>
    <div class="footer">
      <div class="social-link">
        <a href="#">facebook</a>
        <a href="#">google+</a>
        <a href="#">twitter</a>
      </div>
      <p>&copy; 2019 Mohammed Khaled Uddin</p>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./js/navigation.js"></script>
  </body>
</html>
