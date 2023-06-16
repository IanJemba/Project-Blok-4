<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="layout.css">
    <style>
        .dashboard-nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .dashboard-nav li {
            list-style-type: none;
            margin: 0 10px;
        }

        .dashboard-nav li a {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .dashboard-nav li:not(:last-child) {
            margin-right: 10px;
        }

        .dashboard-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .dashboard-container h2 {
            text-align: center;
        }

        .dashboard-nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .dashboard-nav li {
            list-style-type: none;
            margin: 0 10px;
        }

        .dashboard-nav li a {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .dashboard-nav li a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>
    <nav>
        <ul class="dashboard-nav">
            <li><a href="admin-register.php">Add Administrator</a></li>
            <li><a href="manager-register.php">Add Manager</a></li>
            <li><a href="register-regular.php">Add Regular User</a></li>
            <li><a href="contact-register.php">Add Contact Person</a></li>
            <li><a href="users-overzicht.php">View Users</a></li>
            <li><a href="contact-overzicht.php">View Contacts</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>

    <div class="dashboard-container">
        <h2>Welcome to the Dashboard</h2>


    </div>

    <?php include 'footer.php'; ?>
</body>

</html>