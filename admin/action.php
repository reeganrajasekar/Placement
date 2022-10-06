<?php require("../db/db.php");
session_start();

if($_SESSION["admin"]=="true"){

}else{
  header("Location: /admin/");

}

$id = $_POST["id"];

if ($_POST["action"] == "stuallow") {
  $sql = "UPDATE student SET list='true' WHERE id='$id'";
  $result = $conn->query($sql);
  header("Location: /admin/home.php");
} else if($_POST["action"] == "studel") {
  $sql = "delete from student WHERE id='$id'";
  $result = $conn->query($sql);
  header("Location: /admin/home.php");
}else if($_POST["action"] == "comallow"){
  $sql = "UPDATE company SET allow='yes' WHERE id='$id'";
  $result = $conn->query($sql);
  header("Location: /admin/list.php");
}else if($_POST["action"] == "comdel"){
  $sql = "delete from company WHERE id='$id'";
  $result = $conn->query($sql);
  header("Location: /admin/list.php");
}







?>