<?php
if (!isset($_POST["name"]) || !isset($_POST["phoneNumber"]) || !isset($_POST["adress"])
|| !isset($_POST["muffins"]) || !isset($_POST["quantity"])) {
  echo "Please fill all the fields with stars";
}
else{
  $db = mysqli_connect("127.0.0.1", "root", "", "muffins");
  $query = "select name, email from users where name = ?";
  $statement = $db->prepare($query);
  $statement->bind_param("sssss", $_POST["name"], $_POST["phoneNumber"], $_POST["adress"], $_POST["muffins"], $_POST["quantity"]);
  $statement->execute();
  $result = $statement->get_result();
}
