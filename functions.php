<?php
// Koneksi
$conn = new mysqli('localhost', 'root', '', 'nomads');

// Select
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

//Add
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


//Registration
function registration($data)
{
    global $conn;

    $name = strtolower($_POST['name']);
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    //check email is alredy registered or not
    $result = mysqli_query($conn, "SELECT email FROM member_register WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Email already regirtered in nomads');
              </script>";

        return false;
    }

    // matching password with confirm password
    if ($password != $confirm) {
        echo "<script>
                alert('Different password with confirm!');
              </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert data
    mysqli_query($conn, "INSERT INTO member_register (name, email, username, password)
                        VALUES ('$name','$email','$username','$password')");
    return mysqli_affected_rows($conn);
}
