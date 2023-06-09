<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

require 'database.php';

$sql = "SELECT * FROM User WHERE username = '$username' ";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if ($user['password'] === $_POST['password']) {

    session_start();

    $_SESSION['isIngelogd'] = true;
    $_SESSION['username'] = $user['username'];
}

 
?>