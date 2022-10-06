
<?php
require("./db/db.php");
$email = $_POST['email'];
$dob = $_POST['dob'];
$sql = "select * from student where email='$email'";
$result = $conn->query($sql);
session_start();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id=$row['id'];
        if($row["dob"]==$dob){
            header("Location: /info.php?id=$id");
        }else{
            header("Location: /login.php?data=Wrong email or DOB");
        }
    }
}else{
    header("Location: /login.php?data=Wrong email or DOB");
}
?>