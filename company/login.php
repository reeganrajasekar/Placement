
<?php
require("../db/db.php");
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$sql = "select * from company where email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["email"]==$email){
            if($row["passwd"]==$passwd){
                if ($row["allow"]=='yes') {
                    header("Location: /company/home.php");
                    die();
                } else {
                    header("Location: /company?data=You are in a Waiting List");
                }
            }
            else{   
                 header("Location: /company?data=Wrong email or DOB");

            }
        }
    }
}else{
    header("Location: /company?data=Wrong email or DOB");

}
?>