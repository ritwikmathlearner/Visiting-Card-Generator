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
      <h1 class="primary-heading">Welcome 
        <?php
            echo $_SESSION["customer"];
        ?>
      </h1>
    </div>
    <div class="description">
        <h1 class="main-heading underline">
            Your Pending Cards
        </h1>
        <?php
          $sql = "SELECT cardID, name, designation, cardType FROM visitingcard where status='pending'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
        ?>
        <table class="cards">
            <tr>
              <th>Card ID</th>
              <th>Name on Card</th>
              <th>Designation</th>
              <th>Card Type</th>
              <th>Action</th>
            </tr>
        <?php
              while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                      <td><?php echo $row["cardID"] ?></td>
                      <td><?php echo $row["name"] ?></td>
                      <td><?php echo $row["designation"] ?></td>
                      <td><?php echo $row["cardType"] ?></td>
                      <td><button type="submit" name="download">Preview</button></td>
                    </tr>
                <?php
              } 
              echo '</table>';
            } else {
              ?>
                <h1 class="main-heading">You have no pending cards to download</h1>
              <?php
            }
        ?>
    </div>
    <div class="dark-background">
      <div class="close"><p>+</p></div>
      <div class="classic-preview">
          <h1 class="name" id="fullName">Gabriel Donovan</h1>
          <p class="designation" id="job">Business Analyst</p>
          <h1 class="company" id="companyName">IBM Solutions</h1>
          <p class="line" id="line1">Line1</p>
          <p class="line" id="line2">Line2</p>
      </div>
      <button type="submit" name="download" id="download" class="uppercase download-btn">Download</button>
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
