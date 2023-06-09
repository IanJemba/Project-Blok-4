<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$house_number = $_POST['house_number'];
$postcode = $_POST['postcode'];
$street = $_POST['street'];
$country = $_POST['country'];
$phone_number = $_POST['phone_number'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

require 'database.php'; // Assuming your database connection code is in this file

$sql = "INSERT INTO User (voor_name, tussenvoessels, achter_name, geslacht, e_mail, username, password, huis_no, postcode, straat, land, tel_no)
        VALUES ('$first_name', '$middle_name', '$last_name', '$gender', '$email', '$username', '$hashed_password', '$house_number', '$postcode', '$street', '$country', '$phone_number')";

if (mysqli_query($conn, $sql)) {
    header("location: users-overzicht.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
