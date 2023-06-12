<?php
require 'database.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>
    <h2>User Registration Form</h2>
    <form action="verwerk-register.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="house_number">House Number:</label>
        <input type="text" id="house_number" name="house_number" required><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" required><br><br>

        <label for="street">Street:</label>
        <input type="text" id="street" name="street" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="role">Sign Up As;</label>
        <select id="role" name="role" required>
            <option value="Administrator"> Administrator</option>
            <option value="Manager">Manager</option>
            <option value="Regular">Regular</option>
        </select><br><br>

        <label for="datum">Ingang datum;</label>
            <input type="date" id="in_dienst" name="datum" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>