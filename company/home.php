
<?php require("../db/db.php");



if(isset($_GET["pgpoy"]) && isset($_GET["deg"])&& isset($_GET["dept"])&& isset($_GET["ten"])&& isset($_GET["twel"])&& isset($_GET["ugcol"]) && isset($$_GET["pgcol"])){
  $pgpoy = $_GET["pgpoy"];
  $deg = $_GET["deg"];
  $dept = $_GET["dept"];
  $ten = $_GET["ten"];
  $twel = $_GET["twel"];
  $ugcol = $_GET["ugcol"];
  $pgcol = $_GET["pgcol"];
    $sql = "SELECT * FROM student where list='true' and place='false' and pgpoy='$pgpoy' and deg='$deg' and dept='$dept' and ten>='$ten' and twel>='$twel' and ugcol>='$ugcol' and pgcol>='$pgcol'";
}else{
    $sql = "SELECT * FROM student where list='true' and place='false'";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body style="background-color:white;">
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">Placement</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/company/home.php" class="nav-item nav-link active">Home</a>
                    <a href="/" class="nav-item nav-link ">Logout</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


<div class="container" style="background-color:white;padding-top:30px">



    <div class="container">
          <div class="row">
            <div class="col-11">
              <h3 style="color:#00B074;"><?php if(!isset($_GET['deg'])){echo"Recommended ";} ?>Students</h3>
            </div>
            <div style="cursor:pointer;" class="col-1" data-bs-toggle="modal" data-bs-target="#myModal">
              <h2 style="color:white;border:1px solid white;border-radius:5px;text-align:center;background-color:#00B074">+</h2>
            </div>
          </div>
          <div class="row">
            <?php 
            $result = $conn->query($sql);
            
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
                                    <div class="col-4">
                                    </div>
                                    <div class="col-2">
                                        <form action="/company/view.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                            <button class="btn" style="margin-right:20px;color:white;background:#00B074"  type="submit">View</button>
                                        </form>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                  </div>
               <?php
              }
            }else{
              echo("<p style='padding-left:40px;padding-top:10px'>List is empty</p>");
            }
            ?>
      
      </div>
    </div>
        </div>
    </div>

</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create List</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action=""  class="container" method="GET">
            <div class="form-floating mb-3">
              <input required type="text" value="<?php echo $pgpoy?>" class="form-control" id="floatingInput" placeholder="name@example.com" name="pgpoy">
              <label for="floatingInput">PG Passed Out Year (*)</label>
            </div>
            <div class="form-floating mb-3">
              <input required type="text" value="<?php echo $deg?>" class="form-control" id="floatingPassword" placeholder="Password" name="deg">
              <label for="floatingPassword">Degree</label>
            </div>
            <div class="form-floating mb-3">
              <input required type="text" value="<?php echo $dept?>" class="form-control" id="floatingPassword" placeholder="Password" name="dept">
              <label for="floatingPassword">Department</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" value="<?php echo $ten?>" id="floatingInput" placeholder="name@example.com" name="ten">
              <label for="floatingInput">10th %</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" value="<?php echo $twel?>" id="floatingPassword" placeholder="Password" name="twel">
              <label for="floatingPassword">12th %</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" value="<?php echo $ugcol?>" id="floatingPassword" placeholder="Password" name="ugcol">
              <label for="floatingPassword">UG %</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" value="<?php echo $pgcol?>" id="floatingPassword" placeholder="Password" name="pgcol">
              <label for="floatingPassword">PG %</label>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Create</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>
            <div style="height:200px"></div>
     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-white-50 footer pt-0 mt-5 wow fadeIn" data-wow-delay="0.1s">
         
         <div class="container">
             <div class="copyright">
                 <div class="row">
                     <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                         All Right Reserved. 
         
                     </div>
                     <div class="col-md-6 text-center text-md-end">
                         <div class="footer-menu">
                             <a href="/">Home</a>
                             <a href="/login.php">Student</a>
                             <a href="/company">Company</a>
                             <a href="/admin">Admin</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer End -->


     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="/lib/wow/wow.min.js"></script>
 <script src="/lib/easing/easing.min.js"></script>
 <script src="/lib/waypoints/waypoints.min.js"></script>
 <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

 <!-- Template Javascript -->
 <script src="/js/main.js"></script>
</body>

</html>

</body>
</html>