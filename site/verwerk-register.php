<?php
require 'database.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['first_name'])) {
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

        // Insert user data into User table
        $sql = "INSERT INTO User (voor_name, tussenvoessels, achter_name, geslacht, email, username, password, huisnummer, postcode, straat, land, telefoonnummer)
                VALUES ('$firstName', '$middleName', '$lastName', '$gender', '$email', '$username', '$password', '$houseNumber', '$postcode', '$street', '$country', '$phoneNumber')";

        if ($conn->query($sql) === TRUE) {
            $userId = $conn->insert_id;

            // Handle additional data based on the selected role
            switch ($role) {
                case 'Administrator':
                    $datum = $_POST['datum'];

                    // Insert data into Admin table
                    $adminSql = "INSERT INTO Admin (admin_id, in_dienst, id) VALUES (NULL, '$datum', $userId)";
                    $conn->query($adminSql);
                    break;
                case 'Manager':
                    $department = $_POST['department'];

                    // Insert data into Manager table
                    $managerSql = "INSERT INTO Manager (manager_id, department, aantal_managers, id) VALUES (NULL, '$department', NULL, $userId)";
                    $conn->query($managerSql);
                    break;
                case 'Regular':
                    $datum = $_POST['datum'];

                    // Insert data into Regular table
                    $regularSql = "INSERT INTO Regular (user_id, datum, id) VALUES (NULL, '$datum', $userId)";
                    $conn->query($regularSql);
                    break;
                default:
                    // Handle invalid role
                    break;
            }

            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
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

        if ($conn->query($sql) === TRUE) {
            echo "Contact registered successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
