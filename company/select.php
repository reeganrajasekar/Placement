<?php require("../db/db.php");
session_start();

if($_SESSION["company"]=="true"){

}else{
  header("Location: /company/");

}


$id = $_POST["id"];

$sql = "UPDATE student SET place='true' WHERE id='$id'";
$result = $conn->query($sql);
header("Location: /admin/list.php");


?>