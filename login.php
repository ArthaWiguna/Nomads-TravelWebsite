<?php

require('functions.php');

if (isset($_POST['login'])) {
    if (login($_POST) == 0) {
        $error = true;
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
            <a href="index.php" class="navbar-brand">
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
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link">Travel Package</a>
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
                        <a href="index.php" class="nav-link">Tetimonial</a>
                    </li>
                </ul>

                <!-- Button mobile -->
                <form action="" class="form-inline d-sm-block d-md-none">
                    <a href="login.php" class="btn btn-login my-sm-0 py-4">Login</a>
                </form>

                <!-- Button Desktop -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-sm-0 px-4">Login</button>
                </form>
            </div>
        </nav>
    </div>

    <main>
        <div class="header-login"></div>
        <div class="header-content">
            <div class="row title-login text-center">
                <h2>We Explore The New <br> Life Much Better</h2>
            </div>
            <div class="row login justify-content-center mt-5">
                <div class="col-10 col-sm-4 card-login p-4 text-center">
                    <img src="frontend/images/logo_nomads.png" width="180px">
                    <div class="form-login text-start px-5 py-4">
                        <form action="" method="POST">
                            <label class="mb-2" for="email">Email Address</label> <br>
                            <input class="form-control" type="email" id="email" name="email" required>
                            <label class="mb-2 mt-2" for="password">Password</label> <br>
                            <input class="form-control" type="password" id="password" name="password" required>

                            <?php if (isset($error)) : ?>
                                <p style="color: red;">Email atau password salah!</p>
                            <?php endif; ?>

                            <input class="rememberMe my-3" type="checkbox" id="rememberMe" name="remeberMe">
                            <label class="lbl-rememberMe" for="remeberMe">Remeber Me</label>

                            <div class="text-center  px-5">
                                <button class="btn btn-login mt-2 mb-2" name="login" type="submit">Login</button><br>
                                <a href="register.php" class="btn btn-register">Register</a>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- footer -->
    <footer class="footer-content mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="row text-center text-md-start ms-md-5">
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