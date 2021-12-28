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
                        <a href="" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="" class="nav-link">Travel Package</a>
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
                        <a href="" class="nav-link">Tetimonial</a>
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

    <!--main -->
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcumb-item">
                                    Travel Packages /
                                </li>
                                <li class="breadcumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-details">
                            <h1>Penglipuran</h1>
                            <p class="mb-3">Republic Of Indonesia</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/details-penglipuran.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details-penglipuran.jpg">
                                </div>
                                <div class="xzoom-tumbs">
                                    <a href="frontend/images/details-penglipuran.jpg">
                                        <img src="frontend/images/details-penglipuran.jpg" class="xzoom-gallery" width="190px" height="105px" xpreview="frontend/images/details-penglipuran.jpg">
                                    </a>
                                    <a href="frontend/images/details-penglipuran2.jpg">
                                        <img src="frontend/images/details-penglipuran2.jpg" class="xzoom-gallery" width="190px" height="105px" xpreview="frontend/images/details-penglipuran2.jpg">
                                    </a>
                                    <a href="frontend/images/details-penglipuran3.jpg">
                                        <img src="frontend/images/details-penglipuran3.jpg" class="xzoom-gallery" width="190px" height="105px" xpreview="frontend/images/details-penglipuran3.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Penglipuran adalah salah satu desa adat <br>
                                yang berlokasi di Kabupaten Bangli, Provinsi Bali, Indonesia. <br>
                                Terkenal sebagai desa yang masih menjalankan tradisi dan <br>
                                budaya-budaya tradisional yang 'kental'.
                            </p>
                            <p class="mt-2 mb-lg-4">
                                Jarak dari pantai Kuta Bali ke desa adat ini menempuh jarak sekitar 54 kilometer. <br>
                                Artinya, membutuhkan waktu sekitar 1 jam 30 menit
                            </p>
                            <div class="row features">
                                <div class="col-md-4 border-start mt-4">
                                    <div class="descriptions">
                                        <img src="frontend/images/event.png" alt="event" class="features-images">
                                        <div class="description-text">
                                            <h3>Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start mt-4">
                                    <div class="descriptions">
                                        <img src="frontend/images/languages.png" alt="languages" class="features-images">
                                        <div class="description-text">
                                            <h3>Languages</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start mt-4">
                                    <div class="descriptions">
                                        <img src="frontend/images/food.png" alt="food" class="features-images">
                                        <div class="description-text">
                                            <h3>Food</h3>
                                            <p>Babi Guling Pande Egi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-right card-details py-3">
                            <h2>Members are going</h2>
                            <div class="members-gallery py-2">
                                <img src="frontend/images/member1.png" class="member me-lg-1" width="55 px">
                                <img src="frontend/images/member2.png" class="member me-lg-1" width="55px">
                                <img src="frontend/images/member3.png" class="member me-lg-1" width="55px">
                                <img src="frontend/images/member4.png" class="member me-lg-1" width="55px">
                                <img src="frontend/images/more-member.png" class="member" width="55px">

                            </div>
                            <hr>
                            <div class="trip-details">
                                <h2>Trip Informations</h2>
                                <table class="py-2">
                                    <tr>
                                        <td width="50%">Date Of Departure</td>
                                        <td width="50%" class="text-end data">11 April 2022</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Duration</td>
                                        <td width="50%" class="text-end data">4D 3N</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Type</td>
                                        <td width="50%" class="text-end data">Open Trip</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Price</td>
                                        <td width="50%" class="text-end data">90$ / Person</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="join-container">
                            <div class="d-grid gap-2">
                                <a href="login.html" class="btn btn-join text-center mt-3 py-2">Login or Register For Join</a>
                            </div>
                        </div>
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
    <!-- xzoom -->
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15

            });
        });
    </script>

</body>

</html>