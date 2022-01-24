<?php
require('functions.php');

global $conn;
$id = $_GET['id'];
$query = "SELECT * FROM member WHERE id = '$id'";
$result = mysqli_query($conn, $query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$memberUpdate = $rows;

header('Location: http://localhost/nomads/checkout.php');
