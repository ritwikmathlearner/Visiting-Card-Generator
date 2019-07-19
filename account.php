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
          $user = $_SESSION["customer_email"];
          $sql = "SELECT cardID, name, designation, cardType FROM visitingcard where status='pending' or status='approved' and user= '$user'";
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
                      <td><button type="submit" name="download" id="preview" onclick="displayCard()">Preview</button></td>
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
    <div class="dark-background" id="card-show">
      <div class="close" id="close"><p onclick="closeCard()">+</p></div>
      <div class="classic-preview">
      <?php
          $cust = $_SESSION["customer_email"];
          $sql = "SELECT name, designation, company, line1, line2, status FROM visitingcard where user = '$cust'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $status = $row['status'];
        ?>
          <h1 class="name" id="fullName"><?php echo $row['name'] ?></h1>
          <p class="designation" id="job"><?php echo $row['designation'] ?></p>
          <h1 class="company" id="companyName"><?php echo $row['company'] ?></h1>
          <p class="line" id="line1"><?php echo $row['line1'] ?></p>
          <p class="line" id="line2"><?php echo $row['line2'] ?></p>
          <?php
              } 
            }
              ?>
      </div>
      <?php
        if(($status == 'pending')) {
          echo '<h3 class="error">Your card is not approved yet</h3>';
          echo $status;
          echo $user;
        } else {
      ?>
      <button type="submit" name="download" id="download" class="uppercase download-btn">Download</button>
      <?php
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
