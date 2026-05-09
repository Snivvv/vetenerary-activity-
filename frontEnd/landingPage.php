<?php 

  

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vet Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/landingPage.css">
  <style>
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #28a745;">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold fs-4" href="#">Animal Vet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>
    <div class="collapse navbar-collapse d-inline-block justify-content-end ml-5" id="navbarNav">
      <ul class="navbar-nav ms-auto">
         <li class="nav-item me-4 fs-5">
          <a class="nav-link text-white" href="#services">Services</a>
        </li>
        <li class="nav-item me-4 fs-5">
          <a class="nav-link text-white" href="#about">About</a>
        </li>
        <li class="nav-item fs-5">
          <a class="nav-link text-white" href="#contact">Contact</a>
        </li>
        <li class="nav-item me-4 fs-5">
          <a class="nav-link text-white" href="loginPage.html">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container hero-section">
    <div class="row align-items-center">
      
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="hero-card">
          <h1 class="hero-title">The best care for your pets starts here.</h1>
          <p class="hero-text">
            At Animal Vet, we treat your pets like family. Our dedicated team provides
            compassionate, high-quality veterinary care to keep your furry friends
            healthy, happy, and thriving. From routine checkups and vaccinations to
            advanced treatments and emergency care, we're here for you every step
            of the way.
          </p>
          <div class="hero-buttons d-flex gap-3">
            <a href="#" class="btn btn-success">Learn More</a>
            <a href="#contact" class="btn btn-success">Contact Us</a>
          </div>

          <div class="accent-circle" style="top:5%; left:90%;"></div>
          <div class="accent-circle" style="bottom:10%; right:85%;"></div>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="../img/Enhanced Liklik photo.png" alt="Vet Hero" class="hero-image">
      </div>
    </div>
  </div>

  


<?php include ('servicesPage.php');?> <!-- yung files neto nasa folder na ng servicesPage -->

<?php include ('aboutPage.php');?> <!-- yung files neto nasa folder na ng aboutPage -->

<?php include ('contactPage.php');?> <!-- yung files neto nasa folder na ng contactPage -->

<footer class="footer">
    <div class="container py-5">
      <div class="row text-white">

        <div class="col-md-3 mb-4">
          <!-- <h4 class="fw-bold"></h4> -->
          <p class="small">Animal Vet Company</p>
        </div>
        <div class="col-md-3 mb-4">
          <h6 class="fw-bold">SERVICES</h6>
          <ul class="list-unstyled">
            <li><a href="#services" class="footer-link">Pet Grooming</a></li>
            <li><a href="#services" class="footer-link">Vaccination</a></li>
            <li><a href="#services" class="footer-link">Surgery</a></li>
          </ul>
        </div>

        <div class="col-md-3 mb-4">
          <h6 class="fw-bold">COMPANY</h6>
          <ul class="list-unstyled">
            <li><a href="#about" class="footer-link">About Us</a></li>
            <li><a href="#contact" class="footer-link">Contact</a></li>
            <li><a href="#" class="footer-link">Support</a></li>
          </ul>
        </div>

        <div class="col-md-3 mb-4">
          <h6 class="fw-bold">RESOURCES</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="footer-link">Blog</a></li>
            <li><a href="#" class="footer-link">FAQs</a></li>
            <li><a href="#" class="footer-link">Privacy Policy</a></li>
          </ul>
        </div>
      </div>

      <hr class="border-light">

      <div class="text-center text-white mt-4">
        <div class="d-flex justify-content-center gap-3 mb-3">
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-envelope"></i></a>
        </div>
        <p class="small mb-0">© 2026 Animal Vet. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
