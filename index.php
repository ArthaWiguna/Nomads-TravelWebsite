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

    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful Place
            <br>
            As Easy On Click
        </h1>
        <p class="mt-3">You will see a beautifull
            <br>
            moment you never find before
        </p>
        <a href="#popular" class="btn btn-get-started px-4">
            Get Started
        </a>
    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <!-- statistik -->
            <section class="section-stats row justify-content-center" id="stats">
                <!-- catatan kecil: col-md artinya md -> lg itu yg dipakai -->
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>18</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- Popular destination -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Popular Destination</h2>
                        <p>New experience that you <br> never find before</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-1.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">PENGLIPURAN BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="details.php" class=" btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-2.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">LABUAN BAJO LOMBOK</div>
                            <div class="travel-button mt-auto">
                                <a href="details.php" class=" btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-3.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO JAWA TIMUR</div>
                            <div class="travel-button mt-auto">
                                <a href="details.php" class=" btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular-4.jpg');">
                            <div class="travel-country">PERU</div>
                            <div class="travel-location">MICHU PICHU URUBAMBA</div>
                            <div class="travel-button mt-auto">
                                <a href="details.php" class=" btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </section>

        <!-- Networks -->
        <section class="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies they are trusted us <br> with a great collaborate</p>
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/network-1.png" alt="network1" class="img-partners">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/network-2.png" alt="network2" class="img-partners">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/network-3.png" alt="network3" class="img-partners">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/images/network-4.png" alt="network4" class="img-partners">
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonial Heading -->
        <section class="section-testimonial-header" id="testimonial">
            <div class="container">
                <div class="row text-center">
                    <h2>People Who Love Us</h2>
                    <p>Happy to see a huge smile <br> from our customers</p>

                </div>
            </div>
        </section>

        <!-- Testimonial Content -->
        <section class="section-testimonial-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="card-testimonial">
                            <img src='frontend/images/testimonial-1.png' alt="testimonial1">
                            <h3>Carolin Mendes</h3>
                            <p>" It was a great experience <br>
                                to saw the memoriable place <br>
                                each the world "
                            </p>
                            <hr>
                            <p class="trip-to">
                                Trip to Bali
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="card-testimonial">
                            <img src='frontend/images/testimonial-2.png' alt="testimonial1">
                            <h3>Tom Jhonson</h3>
                            <p>" It was a great experience <br>
                                to saw the memoriable place <br>
                                each the world "
                            </p>
                            <hr>
                            <p class="trip-to">
                                Trip to Lombok
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="card-testimonial">
                            <img src='frontend/images/testimonial-3.png' alt="testimonial1">
                            <h3>Anna Marrie</h3>
                            <p>" It was a great experience <br>
                                to saw the memoriable place <br>
                                each the world "
                            </p>
                            <hr>
                            <p class="trip-to">
                                Trip to Paris
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="btn btn-need-help px-4 mx-1">I Need Help</a>
                        <a href="#popular" class="btn btn-get-started px-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

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