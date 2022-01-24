<?php
if (!isset($_SESSION)) {
    session_start();
}
// Koneksi
$conn = new mysqli('localhost', 'root', '', 'nomads');

// Select
function queryShowData($query)
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
    $author = $_POST['inputAuthor'];

    $query = "INSERT INTO member (username, nasionality,visa,passport,profile,author)
              VALUES ('$username', '$nasionality', '$visa', '$passport', '$profile', '$author')";

    mysqli_query($conn, $query);
}

//Update
// function update($id)
// {
//     global $conn;

//     $username = htmlspecialchars($_POST['inputUsername']);
//     $nasionality = htmlspecialchars($_POST['inputNasionality']);
//     $visa = $_POST['inputVisa'];
//     $passport = $_POST['inputPassport'];
//     $profile = $_POST['inputProfile'];
//     $author = $_POST['inputAuthor'];

//     $query = "UPDATE member SET username = '$username', nasionality = '$nasionality', visa = '$visa', passport = '$passport', 
//               profile = '$profile', author = '$author' WHERE id = $id";
//     mysqli_query($conn, $query);
// }

// Calculate total cost
$tripPrice = 80;
function totalMember()
{
    $getEmail = $_SESSION['email'];
    global $conn;
    $getMember = mysqli_query($conn, "SELECT * FROM member WHERE author = '$getEmail'");
    $countMember = mysqli_num_rows($getMember);
    return $countMember;
}
function costVisa()
{
    $getEmail = $_SESSION['email'];
    global $conn;
    $getVisa = mysqli_query($conn, "SELECT visa FROM member WHERE visa = 'N/A' AND author = '$getEmail'");
    $calculateVisa = mysqli_num_rows($getVisa) * 190;
    return $calculateVisa;
}

function subTotal()
{
    global $tripPrice;
    $costTotal = $tripPrice * totalMember() + costVisa();
    return $costTotal;
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


//Login
function login($data)
{
    global $conn;
    $email = $_POST['email'];
    $password = $_POST['password'];

    //login memeber
    $result = mysqli_query($conn, "SELECT * FROM member_register WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['level'] == "admin") {
            $_SESSION['login'] = true;
            echo "<script>
                document.location.href = 'admin.php';
             </script>";
        } else if ($row['level'] == 'member') {

            if (password_verify($password, $row['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['email'] = $email;
                echo "<script>
                    document.location.href = 'checkout.php';
                 </script>";
            }
        }
    }
}

// Confirm transaction
function confirm()
{
    global $conn;
    $getAuthor = $_SESSION['email'];
    $totalMember = totalMember();
    $totalCost = subTotal();
    $status = 'Pending Approve';

    $query = "INSERT INTO member_transaction (author, member, total_cost, status)
              VALUES ('$getAuthor', '$totalMember', '$totalCost', '$status')";

    mysqli_query($conn, $query);

    echo "<script>
            document.location.href = 'succes.php';
        </script>";
}
