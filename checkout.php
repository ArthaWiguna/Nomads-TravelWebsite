<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    echo "<script>
            document.location.href = 'login.php';
          </script>";
    exit;
}

// Koneksi
require('functions.php');

//Add
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    add();
}
// Select
$member = query("SELECT * FROM member");
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
                                <li class="breadcumb-item ms-1">
                                    Details /
                                </li>
                                <li class="breadcumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-details">
                            <h1>Who is Going?</h1>
                            <p class="mb-3">Trip to Penglipuran, Bali, Indonesia</p>
                            <div class="attendee">
                                <table class="table table-responsive text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nasionality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <?php foreach ($member as $row) : ?>
                                        <tr>
                                            <td class="align-middle">
                                                <img src="frontend/images/member2.png" height="70px">
                                            </td>
                                            <td class="align-middle">
                                                <?= $row['username']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= $row['nasionality']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= $row['visa']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <?= $row['passport']; ?>
                                            </td>
                                            <td class="align-middle">
                                                <a href="delete.php?id= <?= $row['id']; ?>">
                                                    <img src="frontend/images/ic_remove.png" height="30px">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <div class="member">
                                <h2>Add Member</h2>
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="inputUsername" class="d-none">Username</label>
                                            <input type="text" name="inputUsername" class="form-control mb-2 me-sm-2" id="inputUsername" placeholder="Username" required>
                                        </div>
                                        <div class="col-3">
                                            <label for="inputNasionality" class="d-none">Nasionality</label>
                                            <input type="text" name="inputNasionality" class="form-control mb-2 me-sm-2" id="inputNasionality" placeholder="Nasionality" required>
                                        </div>
                                        <div class="col-3">
                                            <label for="inputVisa" class="d-none">VISA</label>
                                            <select name="inputVisa" class="form-select mb-2 me-sm-2" id="inputVisa" required>
                                                <option value="Visa" selected>VISA</option>
                                                <option value="30 Days">30 Days</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="doePassport" class="d-none">Passport</label>
                                            <div class="input-group form-control mb-2 me-sm-2">
                                                <input type="text" name="inputPassport" class="datepicker" id="doePassport" placeholder="Passport" style="border: none; width: 100%;" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="profilPicture" class="d-none">Profil Picture</label>
                                            <input type="file" name="inputProfile" class="form-control mb-2 me-sm-2" id="profilPicture" placeholder="Picture" required>
                                        </div>
                                        <div class="col-3">
                                            <input type="submit" name="submit" value="Add Member" class="btn btn-add-now mb-2 px-4">
                                        </div>
                                    </div>
                                </form>

                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer">
                                    You are only able to invite member who has registered in nomads
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card Right -->
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-right card-details py-3">
                            <div class="trip-details">
                                <h2>Checkout Informations</h2>
                                <table class="py-2">
                                    <tr>
                                        <td width="50%">Members</td>
                                        <td width="50%" class="text-end data"><?= totalMember(); ?> Person</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Aditional VISA</td>
                                        <td width="50%" class="text-end data">$<?= costVisa(); ?>,00</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Trip Price</td>
                                        <td width="50%" class="text-end data">$80 / person</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Sub Total</td>
                                        <td width="50%" class="text-end data">$<?= subTotal(); ?>,00</td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Total (+ Unique Code)</td>
                                        <td width="50%" class="text-end data total fw-bold">$<?= subTotal(); ?>,33</td>
                                    </tr>
                                </table>
                                <hr>
                                <h2>Payment Instructions</h2>
                                <p class="payment-instructions">Please complete your payment before start your beautifull trip</p>
                                <div class="bank py-4">
                                    <div class="row bank-item mb-4">
                                        <div class="col-auto">
                                            <img src="frontend/images/ic_bankbca.png" class="bank-image" height="60px">
                                        </div>
                                        <div class="col-auto">
                                            <div class="description">
                                                <h3 class="mb-1">PT Nomads Indonesia</h3>
                                                <p>
                                                    88165437866
                                                    <br>
                                                    Bank Central Asia
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bank-item">
                                        <div class="col-auto">
                                            <img src="frontend/images/ic_bankbri.png" class="bank-image" height="60px">
                                        </div>
                                        <div class="col-auto">
                                            <div class="description">
                                                <h3 class="mb-1">PT Nomads Indonesia</h3>
                                                <p>
                                                    51843789065432
                                                    <br>
                                                    Bank Rakyat Indonesia
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <div class="d-grid gap-2">
                                <a href="succes.php" class="btn btn-join text-center mt-3 py-2">I Have Made Pyment</a>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="details.php" class="text-muted">Cancel Booking</a>
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