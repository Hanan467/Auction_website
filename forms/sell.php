<?php
include("conn.php");
include("submit-item.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bidify- Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Bidify@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+251 1589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Bidify<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto active " href="sell.php">Sell</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person"></i> <!-- Assuming "bi-person" is the Bootstrap Icons class for a person icon -->
          </a>
          <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li><a class="dropdown-item" href="#">Log out</a></li>
          </ul>-->
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
   </div>
  </header>
  <div class="container mt-3">
    <h2 class="text-center mb-3">Item Submisssion Form</h2>
  <form action="sell.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputitem">Item name</label>
      <input type="text" class="form-control border-3" id="inputitem" placeholder="Item name" name="item-name">
    </div>
    <div class="form-group col-md-6">
    <label for="inputState">Category</label>
      <select id="inputState" class="form-control border-3"  name="category">
        <option selected>Furniture</option>
        <option>Machinary</option>
        <option>Art</option>
        <option>Electronics</option>
        <option>Land</option>
        <option>car</option>
      </select>
    </div>
  </div>
  <div class="row mt-2">
   <div class="form-group col-md-4">
    <div class="mb-2 mt-2">
        <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
        alt="example placeholder" style="width: 400px; height: 150px;" />
    </div>
    <div class="container ms-5">
        <div class="btn btn-success btn-rounded ms-5">
            <label class="form-label text-white" for="customFile1">Choose file</label>
            <input type="file" class="form-control d-none ms-2" id="customFile1"  name="image" onchange="displaySelectedImage(event, 'selectedImage')" />
        </div>
    </div>
  </div>
  <div class="form-group col-md-4">
  <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control border-3" id="exampleFormControlTextarea1" rows="5"  name="description"></textarea>  </div>
   
    <div class="col-md-4">
     <div class="row mb-3 mt-2">
    <div class="form-group">
      <label for="inputState">Current state</label>
      <select id="inputState" class="form-control border-3"  name="current-state">
        <option selected>New</option>
        <option>Used</option>
      </select>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label for="inputZip">Starting price</label>
      <input type="text" class="form-control border-3" id="inputZip" name="starting-price">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-4">
  <div class="form-group">
      <label for="inputauctype">Auction type</label>
      <select id="inputauctype" class="form-control border-3" name="auction-type">
        <option selected>English</option>
        <option>Closed</option>
      </select>
    </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputitem">Auction Start Date</label>
      <input type="date" class="form-control border-3" id="inputitem"  name="start-date">
    </div>
    <div class="form-group col-md-4">
      <label for="inputitem">Auction End Date</label>
      <input type="date" class="form-control border-3" id="inputitem"  name="end-date">
    </div>
</div>
  <div class="form-group mt-3">
    <div class="form-check">
      <input class="form-check-input border-3" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div >
  <button type="submit" class="btn btn-success col-lg-4 mx-auto mt-3"  name="submit">Submit</button>
</form>
</div>
<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Bidify<span>.</span></h3>
        <p>
          Addis Ababa, Ethiopia<br><br>
          <strong>Phone:</strong> +251 1589 55488 55<br>
          <strong>Email:</strong> Bidify@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Register</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#login">Login</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>You can reach us through the following platforms</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Bidify</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="#">Hanan Ansar</a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="/assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>


<!-- Template Main JS File -->

<script src="assets/js/main.js"></script>
<script src="assets/js/sell.js"></script>

</body>
</html>