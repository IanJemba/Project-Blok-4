<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>
    
    <div class="container">
        <h2>User Registration Form</h2>
        <form action="verwerk-register.php" method="POST">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="house_number">House Number:</label>
                <input type="text" id="house_number" name="house_number" required>
            </div>
            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required>
            </div>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" id="street" name="street" required>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="role">Sign Up As:</label>
                <select id="role" name="role" required>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="Regular">Regular</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
</body>

</html>
