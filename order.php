<?php
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$adress = $_POST['adress'];
$muffins = $_POST['muffins'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];

if (!empty($name) || !empty($phoneNumber) || !empty($adress) || !empty($muffins)
||!empty($quantity)) {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "muffins";

  //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_error().')' . mysqli_connect_error());
  }else{
    $SELECT = "SELECT adress From orders Where adress = ? Limit 1";
    $INSERT = "INSERT into orders (name, phoneNumber, adress, muffins, quantity, message)
              values(?, ?, ?, ?, ?, ?)";

              $stmt = $conn->prepare($SELECT);
              $stmt->bind_param("s", $adress);
              $stmt->execute();
              $stmt->bind_result($adress);
              $stmt->store_result();
              $rnum = $stmt->num_rows;

              if($rnum == 0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sissis", $name, $phoneNumber, $adress, $muffins,
                $quantity, $message);
                $stmt->execute();
                echo "Your order has been placed.";
              }
              $stmt->close();
              $conn->close();
  }
} else{
    echo "Fields with stars are requierd";
    die();

}
?>
