<?php
require("./db/db.php");
$name = $_POST["name"];
$fname = $_POST["fname"];
$dob = $_POST["dob"];
$ugpoy = $_POST["ugpoy"];
$pgpoy = $_POST["pgpoy"];
$deg = $_POST["deg"];
$dept = $_POST["dept"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$ten = $_POST["ten"];
$twel = $_POST["twel"];
$ugcol = $_POST["ugcol"];
$pgcol = $_POST["pgcol"];
$addr = $_POST["addr"];
$list = "false";
$place = "false";

$sql = "INSERT INTO student (name,fname,dob,ugpoy,pgpoy,deg,dept,email,mob,ten,twel,ugcol,pgcol,addr,list,place)
VALUES ('$name','$fname','$dob','$ugpoy','$pgpoy','$deg','$dept','$email','$mob','$ten','$twel','$ugcol','$pgcol','$addr','$list','$place')";
    
if ($conn->query($sql) === TRUE) {
  setcookie("email",$email, time() + (86400 * 30), "/");
  header("Location: /info.php");
} else {
    echo "Setup Faild " . $conn->error;
}

?>