<?php
include("login.php");
//include("show_item.php");
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto " href="sell.php">Sell</a></li>
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
  <!-- End Header -->
  <div class="container">
  <div class="row mt-2">
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=Furniture" class="navigation-link">
        <img src="assets/item_categories/furnitures.jpg" class="img-fluid navigation-img "style="height: 80px;; width:fit-content;" alt="Furnitures">
        <h6 class="navigation-title">Furnitures</h6>
      </a>
    </div>
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=car" class="navigation-link">
        <img src="assets/item_categories/cars.jpg" class="img-fluid navigation-img" style="height: 80px;; width:fit-content;" alt="Cars">
        <h6 class="navigation-title">Cars</h6>
      </a>
    </div>
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=Land" class="navigation-link">
        <img src="assets/item_categories/land.jpg" class="img-fluid navigation-img" style="height: 80px;; width:fit-content;" alt="Land">
        <h6 class="navigation-title">Land</h6>
      </a>
    </div>
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=Machinary" class="navigation-link">
        <img src="assets/item_categories/machinaries.jpg" class="img-fluid navigation-img" style="height: 80px;; width:fit-content;" alt="Machinaries">
        <h6 class="navigation-title">Machinaries</h6>
      </a>
    </div>
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=Art" class="navigation-link">
        <img src="assets/item_categories/arts.jpg" class="img-fluid navigation-img" style="height: 80px;; width:fit-content;" alt="Art">
        <h6 class="navigation-title">Art</h6>
      </a>
    </div>
    <div class="col-4 col-md-3 col-lg-2">
      <a href="?category=Electronics" class="navigation-link">
        <img src="assets/item_categories/electronics.png" class="img-fluid navigation-img" style="height: 80px;; width:fit-content;" alt="Electronics">
        <h6 class="navigation-title">Electronics</h6>
      </a>
    </div>
  </div>
</div>
<?php
include("conn.php");

// Check if the category parameter is set
if (isset($_GET['category'])) {
    $category = $_GET['category'];

    // Fetch images based on the category (you may need to adjust the query)
   // $result = $conn->query("SELECT image FROM item WHERE category = '$category' ORDER BY Item_Id DESC");
    $result = $conn->query("SELECT Item_Id, Item_Name, description, start_date, end_date, image FROM item WHERE category = '$category' ORDER BY Item_Id DESC");

    // Check if there are images in the result set
    if ($result->num_rows > 0) {
        echo '<div class="row mt-4">';
        // Loop through each row in the result set
        while ($row = $result->fetch_assoc()) {
            // Display the image using the stored file path
            echo '<div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="picture/' . $row['image'] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">' . $row['Item_Name'] . '</h5>
                        <p class="card-text">' . $row['description'] . '</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Start Date: ' . $row['start_date'] . '</li>
                            <li class="list-group-item">End Date: ' . $row['end_date'] . '</li>
                        </ul>
                        </div>
                    </div>
                </div>';
        }
        echo '</div>';
    } else {
        // Display a message if no images are found
        echo '<p class="status error">No images found for the selected category...</p>';
    }
} else {
    // Display a message if the category parameter is not set
    echo '<p class="status error">Category not specified...</p>';
}

// Close the database connection
$conn->close();
?>

</body>

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
</html>