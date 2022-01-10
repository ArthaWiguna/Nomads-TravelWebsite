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

    <!-- xzoom -->
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">

    <!-- gijgo -->
    <link rel="stylesheet" href="frontend/libraries/gijgo/css/gijgo.css">

    <!-- scss -->
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<body>
    <!-- navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ms-auto me-auto me-sm-auto me-md-auto me-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img src="frontend/images/logo_nomads.png" alt="logo">
                </a>
            </div>
            <ul class="navbar-nav me-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Beyond the explorer of the world
                    </span>
                </li>
            </ul>
        </nav>
    </div>

    <!--main -->
    <main>
        <div class="section-succes row">
            <div class="col text-center">
                <img src="frontend/images/ic_succes.png" alt="succes" class="mb-4">
                <h2>Yay Succes!</h2>
                <p>
                    We've sent you email for trip instruction <br>
                    please read it as well
                </p>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <a href="index.php" class="btn btn-home px-5 mt-4 me-2 py-2">Home</a>
                        <a href="https://wa.wizard.id/074385" target="_blank" class="btn btn-confirm-payment px-4 mt-4 py-2">Confirm Payment</a>
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
    <!-- xzoom -->
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15

            });

            $('.datepicker').datepicker({

                uiLibrary: 'bootstrap5',
                icon: {
                    righIcon: 'default'

                }

            })
        });
    </script>

</body>

</html>