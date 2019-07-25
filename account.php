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
      <h1 class="primary-heading">Welcome 
        <?php
            if(isset($_SESSION["customer"])){
            echo $_SESSION["customer"]; }
            else {
              echo '<h1 class="error">You have to login first</h1>';
            }
        ?>
      </h1>
    </div>
    <div class="description">
        <h1 class="main-heading underline">
            Your Pending Cards
        </h1>
        <?php
          $user = $_SESSION["customer_email"];
          $sql = "SELECT cardID, name, designation, company, line1, line2, status, cardType FROM visitingcard where user= '$user' AND (status='pending' or status='approved')";
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
                $cardType = $row["cardType"];
                $cardID = $row["cardID"];
                $name = $row["name"];
                $designation = $row["designation"];
                $company = $row["company"];
                $line1 = $row["line1"];
                $line2 = $row["line2"];
                $status = $row["status"];
                $cardType = $row["cardType"];

                ?>
                    <tr>
                      <td><?php echo $cardID ?></td>
                      <td><?php echo $name ?></td>
                      <td><?php echo $designation ?></td>
                      <td><?php echo $cardType ?></td>
                      <td><button type="submit" name="preview" id="preview" onclick="displayCard()">Preview</button>
                      <form action="visitingcard.php" method="post" class="downloaded">
                        <button type="submit" name="downloaded" id="downloaded" value="<?php echo $cardID ?>">Downloaded</button></td>
                      </form>
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
      <?php
          if($cardType == "Classic"){
        ?>
          <div class="classic-preview" <?php if($cardType == "Classic"){ echo 'id="preview-card"';} ?>>
            <h1 class="name" id="fullName"><?php echo $name ?></h1>
            <p class="designation" id="job"><?php echo $designation ?></p>
            <h1 class="company" id="companyName"><?php echo $company ?></h1>
            <p class="line" id="line1"><?php echo $line1 ?></p>
            <p class="line" id="line2"><?php echo $line2 ?></p>
          </div>
          <?php
              }
              else { ?>
              <div class="modern-preview" <?php if($cardType == "Modern"){ echo 'id="preview-card"';} ?> style="display: flex;">
                <div class="right-side">
                  <h1 class="company" id="modern-companyName"><?php echo $company ?></h1>
                </div>
                <div class="left-side">
                  <h1 class="name" id="modern-fullName"><?php echo $name ?></h1>
                  <p class="designation" id="modern-job"><?php echo $designation ?></p>
                  <p class="line" id="modern-line1"><?php echo $line1 ?></p>
                  <p class="line" id="modern-line2"><?php echo $line2 ?></p>
                </div>
            </div>
                <?php
            }
        if(($status == 'pending')) {
          echo '<h3 class="error">Your card is not approved yet</h3>';
          // echo $status;
          // echo $user;
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
    <script src="./js/jquery.js"></script>
    <script src="./js/html2canvas.min.js"></script>
    <script src="./js/canvas2image.js"></script>
    <script src="./js/navigation.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
