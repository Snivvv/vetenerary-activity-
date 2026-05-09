<?php 

include "conn.php";

if(isset($_POST['register'])){

    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $HashedPassword = $_POST['HashedPassword'];

    $HashedPassword = password_hash ($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO registration_user 
    (first_name, middle_name, last_name, gender, email, password)
    VALUES 
    ('$firstname', '$middlename', '$lastname', '$gender', '$email', '$HashedPassword')";

    if ($conn->query($sql)){
        echo "Registration Successful"; 
    }
    else {
        echo "Error: " . $conn->error;
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" href="registrationPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <form class="needs-validation" novalidate action="" method="POST">
            <div class="container d-flex justify-content-center align-items-center vh-100">
             <div class="login-form p-4 bg-white rounded-4 shadow-lg border border-success" style="width: 380px;">
                <h3 class="text-center mb-3">Registration</h3>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" required name="first_name">
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control" required name="middle_name">
                            <div class="invalid-feedback">
                                Please enter your middle name.
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" required name="last_name">
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Gender</label>
                            <select class="form-select" required name="gender">
                                <option value="">Choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="prefer_not">Prefer not to say</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select your gender.
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required name="email">
                        <label for="floatingInput">Email address</label>
                        <div class="invalid-feedback">
                            Please enter a valid email.
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required minlength="6" name="password">
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            Password must be at least 6 characters.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required minlength="6">
                        <label for="floatingPassword">Confirm Password</label>
                        <div class="invalid-feedback">
                            Password must be at least 6 characters.
                        </div>
                    </div>

                        <button class="btn btn-success w-100 rounded-pill fw-semibold" type="submit" name="register">
                            Register Pet Owner
                        </button>

                         <a href="loginPage.php" class="btn btn-success w-100 rounded-pill fw-semibold mt-3">
                            Login
                        </a>
            </div>
        </div>
    </form>   
        <script>
        (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }


            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
    
  </body>
</html>