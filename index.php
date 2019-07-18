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
      <div class="visiting card">Card Generator</div>
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
    <div class="header">
      <h1 class="primary-heading">Make a beautiful card in seconds</h1>
      <h2 class="secondary-heading">
        Welcome to Card Generator... The World's #1 Visiting Card Maker. Try it
        for FREE!
      </h2>
      <form action="" class="create-card">
        <input type="text" placeholder="Enter Your Business Name" />
        <button type="submit" class="uppercase">Create Cards</button>
      </form>
      <a href="#howitworks" class="uppercase slogan">See How it Works</a>
    </div>
    <div class="card-ex">
      <h1 class="main-heading">
        Make a visiting card you'll love, instantly. Try for free.
      </h1>
      <p class="semi-dark-para">
        Whether you need cards for your startup, a real estate business or a
        wedding, we can help you generate thousands of cards in seconds.
      </p>
      <div class="card-template">
        <div class="card-template">
          <img src="./img/card-template1.png" alt="">
        </div>
        <div class="card-template">
          <img src="./img/card-template2.png" alt="">
        </div>
        <div class="card-template">
          <img src="./img/card-template3.png" alt="">
        </div>
      </div>
      <a href="#" class="browse uppercase">browse all the visiting cards</a>
    </div>
    <div class="howitworks" id="howitworks">
      <h1 class="main-heading">
        Generate 1000's of visiting card ideas in seconds
      </h1>
      <p class="semi-dark-para">
        BrandCrowd has thoughts of unique, premium visiting card design ideas
        created by designers from around the world. Here's how it works:
      </p>
      <div class="showcase">
        <div>
          <div class="number">1</div>
          <img src="./img/search.png" alt="" />
          <p class="dark-para">Generate cards</p>
          <p>
            Enter your business name and our
            <a href="#" class="special">Visisting Card Maker</a> will generate
            visiting card ideas in seconds.
          </p>
        </div>
        <div>
          <div class="number">2</div>
          <img src="./img/edit.png" alt="" />
          <p class="dark-para">Edit your card</p>
          <p>
            Change colours, fonts, add a tagline... Our card maker is 100%
            customizable and easy to use.
          </p>
        </div>
        <div>
          <div class="number">3</div>
          <img src="./img/download.png" alt="" />
          <p class="dark-para">Download your card!</p>
          <p>
            Download your card files and start sharing it with the world!
          </p>
        </div>
      </div>
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
