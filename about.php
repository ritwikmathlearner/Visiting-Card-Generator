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
    <div class="header half-page">
      <h1 class="primary-heading">About Us</h1>
    </div>
    <div class="description">
        <h1 class="main-heading underline">
            Welcome to Card generator
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum at reiciendis dolorem laboriosam perferendis, itaque recusandae deleniti velit eligendi doloribus minus voluptatibus nulla ea id, expedita fuga neque alias numquam! Cum deserunt necessitatibus nobis. Repellat, deleniti distinctio harum tempore perspiciatis eaque molestias repellendus, adipisci nisi eos, hic voluptas ducimus.</p>
        <div class="team">
            <h2 class="main-heading">
                Meet Our Team
            </h2>
            <div class="team-members">
                <div>
                    <img src="./img/member1.png" alt="">
                    <p class="main-heading">
                        Liam Huie
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum reprehenderit, rem enim commodi architecto voluptas voluptatibus consectetur amet tenetur maiores natus necessitatibus perferendis! Aliquid, eum. Repellat, voluptate! Ipsam, id.</p>
                </div>
                <div>
                    <img src="./img/member2.png" alt="">
                    <p class="main-heading">
                        Liam Huie
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum reprehenderit, rem enim commodi architecto voluptas voluptatibus consectetur amet tenetur maiores natus necessitatibus perferendis! Aliquid, eum. Repellat, voluptate! Ipsam, id.</p>
                </div>
                <div>
                    <img src="./img/member3.jpg" alt="">
                    <p class="main-heading">
                        Liam Huie
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum reprehenderit, rem enim commodi architecto voluptas voluptatibus consectetur amet tenetur maiores natus necessitatibus perferendis! Aliquid, eum. Repellat, voluptate! Ipsam, id.</p>
                </div>
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
