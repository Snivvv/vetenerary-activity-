    <?php
        session_start();
        include "../db/conn.php";

        if(isset($_POST['login'])) { 
                    
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  registration_user WHERE email = '$email'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $registration_user = $result->fetch_assoc();

            if(password_verify($password, $registration_user['password'])){
            $_SESSION['user'] = $registration_user['first_name'];
            header("Location: dashboard.php");
            exit();
}
            else {
                echo "Invalid Password";
            }

        }else {
            echo "User not Found!";
        }
            
        }

    ?>


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>
        <link rel="stylesheet" href="../landingPage.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body style="background-color:white">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <div class="container d-flex justify-content-center align-items-center vh-100">
                <form method="POST">
                    <div class="login-form p-4 bg-white rounded shadow  border border-success" style="width: 350px; height: 73%;">
                        <h3 class="text-center mb-3">Login</h3>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="forgot-password m-3">
                            <a href="#" class="text-decoration-none text-black">forgot password?</a>
                        </div>

                        <button class="btn btn-success w-100 rounded-pill fw-semibold" 
                                type="submit" name="login">
                                Login
                        </button>

                        <button class="btn btn-success w-100 rounded-pill fw-semibold mt-3" type="submit">
                                    <a href="registrationPage.php" class="sign-up text-decoration-none text-light" >Sign up</a>
                        </button>
                        
                        <div class="paragraph p-2 m-3 d-flex justify-content-center">
                        <p>Or Sign Up With</p>
                        </div>
                    
                        <div class="image d-flex justify-content-evenly">
                        <a href="#"><img src="../img/facebook.png" alt="" height="50px"></a>
                        <a href="#"><img src="../img/search.png" alt="" height="50px"></a>
                        <a href="#"><img src="../img/github.png" alt="" height="50px"></a>
                        </div>
                    </div>
                </form>
            </div>
    </body>
    </html>