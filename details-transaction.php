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

//Show member trip
$author = $_GET['author'];
$dataMember = queryShowData("SELECT * FROM member WHERE author = '$author'");

//update status member trip
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve'])) {

        $query = "UPDATE member_transaction SET status = 'Approve' WHERE author = '$author'";
        mysqli_query($conn, $query);

        echo "<script>
                 document.location.href = 'admin.php';
            </script>";
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
        <div class="row p-5">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="card card-transactions p-4">
                        <div class="title-transactions">
                            <h2>Details Member Trip</h2>
                        </div>
                        <div class="attendee mt-4 px-4">
                            <table class="table table-responsive text-center">
                                <thead>
                                    <tr>
                                        <td>Username</td>
                                        <td>Username</td>
                                        <td>Nasionality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                    </tr>
                                </thead>
                                <?php foreach ($dataMember as $row) : ?>
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
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <div class="btn-admin">
                                <input type="submit" name="approve" value="Approve Transaction" class="btn btn-approve mb-2 px-4 text-white float-end" style="background-color: #071c4d;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
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

</body>

</html>