<?php
// Koneksi
$conn = new mysqli('localhost', 'root', '', 'nomads');

// select
function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//add

function add()
{

    global $conn;

    $username = htmlspecialchars($_POST['inputUsername']);
    $nasionality = htmlspecialchars($_POST['inputNasionality']);
    $visa = $_POST['inputVisa'];
    $passport = $_POST['inputPassport'];
    $profile = $_POST['inputProfile'];

    $query = "INSERT INTO member (username, nasionality,visa,passport,profile)
              VALUES ('$username', '$nasionality', '$visa', '$passport', '$profile')";

    mysqli_query($conn, $query);
}
