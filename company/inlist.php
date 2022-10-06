
<?php require("../db/db.php");
session_start();

if($_SESSION["company"]=="true"){

}else{
  header("Location: /company/");

}


$poy = $_GET["poy"];
$deg = $_GET["deg"];
$dept = $_GET["dept"];
$ten = $_GET["ten"];
$twel = $_GET["twel"];
$col = $_GET["col"];

if(isset($ten)){
    $sql = "SELECT * FROM student where list='true' and place='false' and poy='$poy' and deg='$deg' and dept='$dept' and ten>='$ten'";
}else if(isset($twel)){
    $sql = "SELECT * FROM student where list='true' and place='false' and poy='$poy' and deg='$deg' and dept='$dept' and twel>='$twel'";
}else if(isset($col)){
    $sql = "SELECT * FROM student where list='true' and place='false' and poy='$poy' and deg='$deg' and dept='$dept' and col>='$col'";
}else if(isset($poy)){
    $sql = "SELECT * FROM student where list='true' and place='false' and poy='$poy'";
}else if(isset($col) && isset($ten) && isset($twel)){
    $sql = "SELECT * FROM student where list='true' and place='false' and poy='$poy' and deg='$deg' and dept='$dept' and col>='$col' and twel>='$twel' and ten>='$ten'";
}else{
    $sql = "SELECT * FROM student where list='true' and place='false'";
}

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:whitesmoke">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Admin</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto" style="font-size:18px">
        <li class="nav-item">
          <a class="nav-link " href="/admin/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/list.php">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/admin/inlist.php">InterviewList</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="background-color:whitesmoke;padding-top:20px">
        <div >
          <div class="row">
            <div class="col-11">
              <h3 style="color:#0d6efd;">List</h3>
            </div>
            <div class="col-1">
            <h6 style="color:#0d6efd;border:2px solid #0d6efd;text-align:center" data-bs-toggle="modal" data-bs-target="#myModal">Create List</h6>
            </div>
          </div>
          <div class="row">
            <?php 
            
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                ?>
                  <div class="col-6">
                    <div class="card" style="margin-bottom:10px">
                        <div class="card-body">
                            <p>Student Name : <?php echo $row["name"]?></p>
                            <p>Degree/Department : <?php echo($row["deg"]);echo(" / ");echo($row["dept"])?></p>
                            <p>Email : <?php echo $row["email"]?></p>
                            <center>
                                <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-3">
                                    </div>
                                    <div class="col-3">
                                        <form action="/admin/select.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                            <button class="bg-danger btn" style="margin-right:20px;color:white" data-bs-toggle="modal" type="submit">Select</button>
                                        </form>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                  </div>
               <?php
              }
            }
            ?>
      
      </div>
    </div>
        </div>
    </div>

</div>




    
</body>
</html>