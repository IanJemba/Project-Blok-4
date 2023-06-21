<?php
    
    session_start();
    $userID = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        nav {
            margin: 20px 0;
        }

        nav button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        nav button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>

    <nav>

        <button name="role" onclick="location.href='contact-register.php'">Voeg een Contactpersoon toe</button>

        <button id="users" onclick="location.href='users-overzicht.php'">Gebruikers bekijken</button>

        <button id="contacts" onclick="location.href='contact-overzicht.php'">Contacten bekijken</button>
        <button name="Loguit" onclick="location.href='logout.php'">Log out</button>
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
