<?php
require 'database.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['first_name'])) {
        // Process user registration
        $firstName = $_POST['first_name'];
        $middleName = $_POST['middle_name'];
        $lastName = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $houseNumber = $_POST['house_number'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $country = $_POST['country'];
        $phoneNumber = $_POST['phone_number'];
        $role = $_POST['role'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into User table
        $sql = "INSERT INTO User (voor_name, tussenvoessels, achter_name, geslacht, email, username, password, huisnummer, postcode, straat, land, telefoonnummer)
                VALUES ('$firstName', '$middleName', '$lastName', '$gender', '$email', '$username', '$hashed_password', '$houseNumber', '$postcode', '$street', '$country', '$phoneNumber')";

        if (mysqli_query($conn, $sql)) {
            $userId = mysqli_insert_id($conn);

            // Handle additional data based on the selected role
            switch ($role) {
                case 'Administrator':
                    $datum = $_POST['datum'];

                    // Insert data into Admin table
                    $adminSql = "INSERT INTO Admin (admin_id, in_dienst, id) VALUES (NULL, '$datum', $userId)";
                    mysqli_query($conn, $adminSql);
                    break;
                case 'Manager':
                    $department = $_POST['department'];

                    // Insert data into Manager table
                    $managerSql = "INSERT INTO Manager (department, aantal_managers, id) VALUES ('$department', NULL, $userId)";
                    mysqli_query($conn, $managerSql);
                    break;
                case 'Regular':
                    $datum = $_POST['datum'];

                    // Insert data into Regular table
                    $regularSql = "INSERT INTO Regular (user_id, datum, id) VALUES (NULL, '$datum', $userId)";
                    mysqli_query($conn, $regularSql);
                    break;
                default:
                    echo "You have not selected a role.";
                    break;
            }

            echo "Registration successful!";
            header("Location: inloggenuser.php");
            exit();
        
       
        }
    } elseif (isset($_POST['name'])) {
        // Process contact registration
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $street = $_POST['street'];
        $houseNumber = $_POST['house_number'];
        $postcode = $_POST['postcode'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $note = $_POST['notitie'];
        $addDate = $_POST['toevoegdatum'];

        // Insert contact data into the database
        $sql = "INSERT INTO Contactperson (naam, geslacht, straat, huisnummer, postcode, land, telefoon, notitie, toevoegdatum)
                VALUES ('$name', '$gender', '$street', '$houseNumber', '$postcode', '$country', '$phone', '$note', '$addDate')";

        if (mysqli_query($conn, $sql)) {
            
            header("location: contact-overzicht.php");
        }
    }
}
?>
