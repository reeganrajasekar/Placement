<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Signup</title>
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

<body>
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
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/login.php" class="nav-item nav-link active">Student</a>
                    <a href="/company" class="nav-item nav-link">Company</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


<div class="container" style="border-radius:25px;">
    <div class="row" style="border-radius:25px;">
      <div class="col-sm-10 col-md-9 col-lg-8 mx-auto" style="border-radius:25px;">
        <div class="card border-1 shadow rounded-400 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light " ><b>Student Registration Form</b></h5>
            <form action="/register.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" name="name" required class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="fname" required class="form-control" id="floatingInput" placeholder="Father Name">
                <label for="floatingInput">Father Name <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="dob" required class="form-control" id="floatingInput" placeholder="D.O.B">
                <label for="floatingInput">D.O.B (DD-MM-YYYY) <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="ugpoy" required class="form-control" id="floatingInput" placeholder="Passed Out Year">
                <label for="floatingInput">UG - Year of Passing <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="pgpoy" class="form-control" id="floatingInput" placeholder="Passed Out Year">
                <label for="floatingInput">PG - Year of Passing <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="deg" required class="form-control" id="floatingInput" placeholder="Degree">
                <label for="floatingInput">Degree <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="dept" required class="form-control" id="floatingInput" placeholder="Department">
                <label for="floatingInput">Department <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="Email">
                <label for="floatingInput">Email <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="mob" required class="form-control" id="floatingInput" placeholder="Mobile Number">
                <label for="floatingInput">Mobile Number <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="ten" required class="form-control" id="floatingInput" placeholder="10th %">
                <label for="floatingInput">10th (%) <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="twel" required class="form-control" id="floatingInput" placeholder="12th %">
                <label for="floatingInput">12th (%) <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="ugcol" required class="form-control" id="floatingInput" placeholder="College %">
                <label for="floatingInput">UG (%) <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="pgcol" class="form-control" id="floatingInput" placeholder="College %">
                <label for="floatingInput">PG (%) <span style="color:red">*</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="addr" required class="form-control" id="floatingInput" placeholder="Address">
                <label for="floatingInput">Address <span style="color:red">*</span></label>
              </div><br>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" style="background-color:#00B074" type="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
      body {
  background: #007bff;
  background: linear-gradient(to right, #cc2b5e, #753a88);
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

  </style>
     

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
    <script src="js/main.js"></script>
</body>

</html>