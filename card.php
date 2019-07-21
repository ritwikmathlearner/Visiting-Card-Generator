<?php
error_reporting(0);
session_start();
include 'connection.php';
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
      <h1 class="primary-heading">Use Card Generator Tool</h1>
      <h2 class="secondary-heading">
        And make your favourite card in seconds
      </h2>
      <!-- <a href="#generates" class="uppercase slogan">Generate</a> -->
    </div>
    <div class="card-generate" id="generate">
    <?php 
        if(isset($_SESSION["customer"])){
      ?>
        <form action="visitingcard.php" method="post" class="card-details">
            <div class="card-generate-details">Details
                <div class="arrow"></div>
            </div>
            <p class="warning">Data used in the bellow fields will be saved despite of what you see in the cards</p>
            <select name="card-type" id="card-type" onchange="cardTypeSelect()">
                <option value="Classic">Classic</option>
                <option value="Modern">Modern</option>
            </select>
            <input type="text" name="fullname" id="fullname-input" value="Name Surname">
            <input type="text" name="Designation" id="designation-input" value="Designation">
            <?php
              if(isset($_GET['header-submit'])) {
                $companyname = $_GET['company'];
                echo '<input type="text" name="company" id="company-input" value="' . $companyname . '">';
              } else {
                echo '<input type="text" name="company" id="company-input" value="Company Name">';
              }
            ?>
            <input type="text" name="line1" id="line1-input" value="Line1">
            <input type="text" name="line2" id="line2-input" value="Line2">
            <input type="button" value="Preview" class="uppercase" name="preview" id="preview" onclick="updateCard()">
            <?php
             $cust = $_SESSION["customer_email"];
             $sql = "SELECT status FROM visitingcard where user = '$cust' AND status = 'approved' OR status = 'pending'";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                echo '<p class="error" style="text-align: center;">You already have a card in account</p>';
              } else {
                echo '<input type="submit" value="Save" class="uppercase" name="card-create">';
              }
            ?> 
        </form>
        <div class="card-showcase">
            <div class="classic-preview" id="classic-preview">
                <h1 class="name" id="classic-fullName">Gabriel Donovan</h1>
                <p class="designation" id="classic-job">Business Analyst</p>
                <h1 class="company" id="classic-companyName">IBM Solutions</h1>
                <p class="line" id="classic-line1">Line1</p>
                <p class="line" id="classic-line2">Line2</p>
            </div>
            <div class="modern-preview" id="modern-preview">
                <div class="right-side">
                  <h1 class="company" id="modern-companyName">IBM Solutions</h1>
                </div>
                <div class="left-side">
                  <h1 class="name" id="modern-fullName">Gabriel Donovan</h1>
                  <p class="designation" id="modern-job">Business Analyst</p>
                  <p class="line" id="modern-line1">Line1</p>
                  <p class="line" id="modern-line2">Line2</p>
                </div>
            </div>
        </div>
        <?php 
          }
          else {
            echo '<h1 class="error">You have to login first</h1>';
          }
        ?>
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
    <script src="./js/main.js"></script>
  </body>
</html>
