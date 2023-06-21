<?php
    
    session_start();
    
    // Access user information from session
    $userID = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];

    
?>
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
        <h2>Welcome to the your dashboard <?php echo $username?></h2>


    </div>
    <h3>Ons Team</h3>
    <p>Wij zijn een interdisciplinair team, opgericht door ontwikkelaars, dat begrijpt dat talent geen grenzen kent. Uitstekende ontwikkelaars vind je niet overal. We maken het gemakkelijk hen te werven.</p>
    <p>Wij zijn een interdisciplinair team, opgericht door ontwikkelaars, dat begrijpt dat talent geen grenzen kent. Uitstekende ontwikkelaars vind je niet overal. We maken het gemakkelijk hen te werven.</p>
    <h5 style="color: green;  ">Ze omschrijven onze cultuur en begeleiden ons bedrijf in alles wat we doen – van de manier waarom we communiceren met onze cliënten, tot de manier waarop we met elkaar communiceren. Kan ik mijn werk afwisselen met andere werkzaamheden? Ik ben kapper en heb last van eczeem aan mijn handen. Kan ik met andere producten werken? Ik werk veel achter de computer en heb vaak pijn in mijn pols. Kan ik een ander toetsenbord of een andere muis krijgen? Door een conflict met een collega heb ik spanningsklachten. Wat kan ik hieraan doen?</h5>
    <?php include 'footer.php'; ?>
</body>

</html>