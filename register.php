<?php
require('functions.php');

if (isset($_POST["register"])) {

    if (registration($_POST) > 0) {
        echo "<script>
                alert('Registration Succes!');
                document.location.href = 'checkout.php';
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomads</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;
    300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,
    700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- bootstrap.css -->
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">

    <!-- scss -->
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <!-- logo -->
            <a href="#" class="navbar-brand">
                <img src="frontend/images/logo_nomads.png" alt="logo_nomads">
            </a>

            <!-- toggle responsive -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item mx-md-2">
                        <a href="" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#popular" class="nav-link">Travel Package</a>
                    </li>
                    <!-- menu dropdown -->
                    <li class="nav-item dropdown mx-md-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Flight Ticket</a></li>
                            <li><a class="dropdown-item" href="#">Hotel List</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Include PCR Test</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-md-2">
                        <a href="#testimonial" class="nav-link">Tetimonial</a>
                    </li>
                </ul>

                <!-- Button mobile -->
                <form action="" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-sm-0">Login</button>
                </form>

                <!-- Button Desktop -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-sm-0 px-4">Login</button>
                </form>
            </div>
        </nav>
    </div>

    <main>
        <form action="" method="POST">
            <div class="row register justify-content-center">
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mt-1">Register</h5>
                        </div>
                        <div class="form-register mt-4 py-3">
                            <div class="d-md-flex align-items-center mb-3 me-auto">
                                <label class="text-md-end me-4" for="name">Name</label>
                                <input type="text" class="form-control w-100" name="name" required>
                            </div>
                            <div class="d-md-flex align-items-center mb-3">
                                <label class="text-md-end me-4" for="email">Email Adress</label>
                                <input type="email" class="form-control w-100" name="email" required>
                            </div>
                            <div class="d-md-flex align-items-center mb-3">
                                <label class="text-md-end me-4" for="username">Username</label>
                                <input type="text" class="form-control w-100" name="username" required>
                            </div>
                            <div class="d-md-flex align-items-center mb-3">
                                <label class="text-md-end me-4" for="password">Password</label>
                                <input type="password" class="form-control w-100" name="password" required>
                            </div>
                            <div class="d-md-flex align-items-center mb-3">
                                <label class="text-md-end me-4" for="confirm">Confirm Password</label>
                                <input type="password" class="form-control w-100" name="confirm" required>
                            </div>
                            <div class="d-md-flex align-items-cente mb-3">
                                <label class="me-4"></label>
                                <button class="btn btn-register btn-primary" name="register">Register</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <!-- footer -->
    <footer class="footer-content mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-3">
                            <h5>Account</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Rewards</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-3">
                            <h5>Company</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help Center</a></li>

                            </ul>
                        </div>
                        <div class="col-12 col-md-3">
                            <h5>Get Connected</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Gianyar Bali</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">0881-0832-6776</a></li>
                                <li><a href="#">team@nomads.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-text-bottom">
            <div class="row justify-content-center pt-5 border-top">
                <div class="col-auto">
                    <p class="text-bottom">2022 All Right Reserves - Made In Bali</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery -->
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <!-- bootstrap.js -->
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>


</body>

</html>