<?php
session_start();
include 'connection.php';
if(isset($_POST['card-create'])) {
    $user = $_SESSION["customer_email"];
    $type =  $_POST['card-type'];
    $fullname = $_POST['fullname'];
    $Designation = $_POST['Designation'];
    $company = $_POST['company'];
    $line1 = $_POST['line1'];
    $line2 = $_POST['line2'];
    $sql_checkID = "SELECT MAX(cardID) AS highest FROM visitingcard";
        $result_checkID = $conn->query($sql_checkID);
        if ($result_checkID->num_rows > 0) {
            while($row = $result_checkID->fetch_assoc()) {
                $cardID = $row["highest"] + 1;
            }
        } else {
            $cardID = 1;
        }
    $sql = "INSERT INTO visitingcard
                VALUES ($cardID, '$user', '$fullname', '$Designation', '$company', '$line1', '$line2', '$type', 'pending')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        // echo $name . ' ' . $email . ' ' . $pass;
        header("Location: account.php");
}
if(isset($_POST['approve'])){
    $request = $_POST['approve'];
    // echo $request;
    $sql = "UPDATE visitingcard SET status = 'approved' WHERE cardID=$request";
    if ($conn->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
if(isset($_POST['downloaded'])){
    $request = $_POST['downloaded'];
    // echo $request;
    $sql = "UPDATE visitingcard SET status = 'downloaded' WHERE cardID=$request";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>