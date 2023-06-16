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
        <button id="contacts" onclick="location.href='contact-overzicht.php'">Contacten bekijken</button>
        <button name="Loguit" onclick="location.href='logout.php'">Log out</button>
    </nav>

    <?php include 'footer.php'; ?>
</body>

</html>
