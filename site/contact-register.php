<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Person Form</title>
</head>

<body>
    <h1>Contact Person Form</h1>

    <form action="verwerk-register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="house_number">House Number:</label>
        <input type="text" id="house_number" name="house_number" required><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" required><br><br>

        <label for="street">Street:</label>
        <input type="text" id="street" name="street" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="notitie">notitie:</label>
        <textarea id="notitie" name="notitie"></textarea><br><br>

        <label for="toevoegdatum">Toevoegdatum:</label>
        <input type="date" id="toevoegdatum" name="toevoegdatum" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>