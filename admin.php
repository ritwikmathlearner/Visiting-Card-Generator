<?php
error_reporting(0);
session_start();
include 'connection.php';
if(!isset($_SESSION["admin"])) {
    header("Location: logout.php"); 
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
        <?php 
            if(!isset($_SESSION["admin"])) {
        ?>
        <li><a href="login.php">Login/Register</a></li>
        <?php 
            } else {
        ?>
            <li><a href="logout.php">Logout</a></li>
            <!-- <li><a href="account.php">Account</a></li> -->
        <?php } ?>
      </ul>
    </div>
    <div class="header half-page">
      <h1 class="primary-heading">Welcome to Admin Section:
        <?php
        if(isset($_SESSION["admin"])){
            echo $_SESSION["admin"]; 
        }
        ?>
      </h1>
    </div>
    <div class="description">
        <h1 class="main-heading underline">
            Pending Requests
        </h1>
        <?php
          $sql = "SELECT cardID, user, name, designation, company, line1, line2, status, cardType FROM visitingcard where status='pending'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
        ?>
        <table class="cards">
            <tr>
              <th>Card ID</th>
              <th>Name on Card</th>
              <th>Customer Email</th>
              <th>Card Type</th>
              <th>Action</th>
            </tr>
        <?php
              while($row = $result->fetch_assoc()) {
                $cardType = $row["cardType"];
                $cardID = $row["cardID"];
                $name = $row["name"];
                // $designation = $row["designation"];
                // $company = $row["company"];
                $user = $row["user"];
                ?>
                    <tr>
                      <td><?php echo $cardID ?></td>
                      <td><?php echo $name ?></td>
                      <td><?php echo $user ?></td>
                      <td><?php echo $cardType ?></td>
                      <form action="visitingcard.php" method="post">
                      <td><button type="submit" name="approve" value="<?php echo $cardID ?>">Approve</button></td>
                      </form>
                    </tr>
                <?php
              } 
              echo '</table>';
            } else {
              ?>
                <h1 class="main-heading">There is no pending card</h1>
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
