<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: loginPage.php");
    exit();
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vet Landing Page</title>
  <link rel="stylesheet" href="dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="landingPage.css">
  <style>
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #28a745;">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold fs-4" href="#">Animal Vet</a>
    <div class="collapse navbar-collapse d-inline-block justify-content-end ml-5" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-4 fs-5">
          <a class="nav-link text-white" href="loginPage.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h2 class="h2 text-align-center justify-content-center d-flex mt-5 fs-1">Welcome, <?php echo $_SESSION['user'];?>!</h2>