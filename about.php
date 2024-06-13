<?php
session_start(); // Start the session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html'); // Redirect to the login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virtual Art Gallery - About</title>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid logo-img">
        <h1 class="logo-text ms-2">Virtual Gallery</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="#">Gallery <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="lukisan.php">Lukisan</a></li>
              <li><a href="patung.php">Patung</a></li>
              <li><a href="fotografi.php">Fotografi</a></li>
            </ul>
          </li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Page Header ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>About</h2>
          <p>Selamat datang di Virtual Art Gallery, sebuah tempat di mana seni dari berbagai penjuru dunia berkumpul untuk dinikmati. Galeri kami memberikan pengalaman unik dan imersif, memungkinkan Anda menjelajahi dan menghargai seni dari kenyamanan rumah Anda.</p>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

 <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-center align-items-center">
      <div class="col-lg-4 d-flex justify-content-center">
        <img src="assets/img/logo.png" class="img-fluid rounded-circle mb-3" alt="">
      </div>
      <div class="col-lg-8 content text-dark">
        <p class="fst-italic mt-3">
        Virtual Art Gallery menampilkan beragam koleksi seni, termasuk lukisan, patung, dan fotografi. Kami mendukung para seniman dengan menyediakan platform untuk memamerkan karya mereka dan menjangkau audiens global. Setiap bulan, kami mengadakan pameran virtual yang menyoroti tema dan seniman yang berbeda.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Established:</strong><span class="ms-2">2023</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Website:</strong><span class="ms-2">www.virtualgallery.com</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Contact:</strong><span class="ms-2">+123 456 7890</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Location:</strong><span class="ms-2">Bandar Lampung, Indonesia</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Virtual Tours:</strong><span class="ms-2">Available</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Exhibitions:</strong><span class="ms-2">Monthly</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Email:</strong><span class="ms-2">info@virtualgallery.com</span></li>
              <li class="d-flex align-items-center"><i class="bi bi-chevron-right text-success me-2"></i><strong>Membership:</strong><span class="ms-2">Available</span></li>
            </ul>
          </div>
        </div>
        <p>
        Kami berkomitmen untuk menjadi jembatan antara seniman dan penikmat seni, memperkaya pengalaman seni di era digital. Virtual Art Gallery hadir untuk menginspirasi dan mendukung kreativitas di seluruh dunia.
        </p>
        <p>
        Mari bergabung bersama kami dalam perjalanan mengeksplorasi dunia seni dengan cara yang baru dan menarik. Jadilah anggota untuk menikmati akses eksklusif ke acara khusus, pratinjau pameran awal, dan banyak lagi.
        </p>
      </div>
    </div>
  </div>
</section><!-- End About Section -->


  <!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-social-links">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
    <small>&copy; 2024 Virtual Gallery. All Rights Reserved.</small>
  </div>
</footer>

</body>

</html>
