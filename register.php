<?php
session_start();
if(isset($_SESSION["customer"]) || isset($_SESSION["admin"])) {
    header("Location: index.php");
    // echo $_SESSION["customer"];
}
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
        <li><a href="login.php">Login/Register</a></li>
      </ul>
    </div>
    <div class="user-management">
        <h1 class="main-heading underline">
          Register
        </h1>
        <form action="user.php" method="post" class="user-form">
        <div>
            <label for="name">Name</label>
            <input type="text" placeholder="Enter your full name" name="name">
        </div>
         <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Enter your email" name="email">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="********">
          </div>
          <input type="submit" name="register" value="Submit" class="uppercase">
          <p>Already a member? <a href="login.php">login!</a></p>
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
