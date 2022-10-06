<?php
require("../db/db.php");
$name = $_POST["name"];
$email = $_POST["email"];
$passwd = $_POST["passwd"];

$sql = "INSERT INTO company (name,email,passwd,allow)
VALUES ('$name','$email','$passwd','no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: /company/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: /");

}

$conn->close();



?>