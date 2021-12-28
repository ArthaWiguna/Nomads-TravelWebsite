<?php
require('functions.php');

// delete
$id = $_GET['id'];

$query = 'DELETE FROM member WHERE id = ' . $id;

$result = $conn->query($query);
header('Location: http://localhost/nomads/checkout.php');
