<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Retrieve user data from the database based on the entered username
    $sql = "SELECT * FROM User WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $storedPassword)) {
            // Password is correct, log in the user

            // Redirect based on the selected role
            switch ($role) {
                case 'Administrator':
                    // Redirect to the administrator page
                    header('Location: admin-dashboard.php');
                    exit();
                case 'Manager':
                    // Redirect to the manager page
                    header('Location: manager-dashboard.php');
                    exit();
                case 'Regular':
                    // Redirect to the regular user page
                    header('Location: regular-dashboard.php');
                    exit();
                default:
                    // Handle invalid role
                    echo "Invalid role!";
                    exit();
            }
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Invalid username or password!";
    }
}
?>
