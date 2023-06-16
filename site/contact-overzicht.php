<?php
require 'database.php';

// Execute the query to fetch all contacts
$sql = "SELECT * FROM Contactperson";
$result = mysqli_query($conn, $sql);

// Check if the query was executed successfully
if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

// Fetch all contacts as an associative array
$all_contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contactperson Overzicht</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>
    <h1>Contactperson Overzicht</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Geslacht</th>
            <th>Straat</th>
            <th>Huisnummer</th>
            <th>Postcode</th>
            <th>Land</th>
            <th>Telefoon</th>
            <th>Notitie</th>
            <th>Toevoegdatum</th>
        </tr>

        <?php foreach ($all_contacts as $contact) { ?>
            <tr>
                <td><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['naam']; ?></td>
                <td><?php echo $contact['geslacht']; ?></td>
                <td><?php echo $contact['straat']; ?></td>
                <td><?php echo $contact['huisnummer']; ?></td>
                <td><?php echo $contact['postcode']; ?></td>
                <td><?php echo $contact['land']; ?></td>
                <td><?php echo $contact['telefoon']; ?></td>
                <td><?php echo $contact['notitie']; ?></td>
                <td><?php echo $contact['toevoegdatum']; ?></td>
            </tr>
        <?php } ?>

    </table>
    <?php include 'footer.php'; ?>
</body>

</html>
