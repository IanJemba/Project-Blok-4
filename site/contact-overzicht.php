<?php
require 'database.php';
// Execute the query to fetch all contacts
$sql = "SELECT * FROM Contactperson";
$result = mysqli_query($conn, $sql);

// Fetch all contacts as an associative array
$all_contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT COUNT(*) AS total_contacts FROM Contactperson";
$result = mysqli_query($conn, $sql);

// Fetch the total number of contacts
$count = mysqli_fetch_assoc($result);
$total_contacts = $count['total_contacts'];


$search = isset($_POST['search']) ? $_POST['search'] : '';
$sort = isset($_POST['sort']) ? $_POST['sort'] : '';

// Modify the SQL query based on the search and sort options
$sql = "SELECT * FROM Contactperson WHERE naam LIKE '%$search%' OR telefoon LIKE '%$search%'";

if ($sort === 'name') {
    $sql .= " ORDER BY naam ASC";
} else if ($sort === 'date_added') {
    $sql .= " ORDER BY toevoegdatum ASC";
}

// Execute the modified query to fetch the sorted and filtered results
$result = mysqli_query($conn, $sql);

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

    <div class="statistics">
        <h2>Statistieken</h2>
        <p>In total hebben wij : <?php echo $total_contacts; ?> geregistered contacts.</p>
    </div>

    <form method="POST">
        <input type="text" name="search" placeholder="Search by name or phone number">
        <select name="sort">
            <option value="">Sort by</option>
            <option value="name">Name</option>
            <option value="date_added">Date Added</option>
        </select>
        <button type="submit">Search & Sort</button>
    </form>

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
                <td><?php echo $contact['user_id']; ?></td>
            </tr>
        <?php } ?>

    </table>
    <?php include 'footer.php'; ?>
</body>

</html>