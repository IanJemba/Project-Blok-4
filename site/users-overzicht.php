<?php
require 'database.php';

// Fetch all users from the User table
$sql = "SELECT * FROM User";
$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Calculate the total number of users
$total_users = count($all_users);

// Fetch all managers from the Manager table
$managerSql = "SELECT U.*, M.department FROM User U INNER JOIN Manager M ON U.id = M.id";
$managerResult = mysqli_query($conn, $managerSql);
$managers = mysqli_fetch_all($managerResult, MYSQLI_ASSOC);

// Calculate the count of managers
$total_managers = count($managers);

// Fetch all regular users from the Regular table
$regularSql = "SELECT U.*, R.datum FROM User U INNER JOIN Regular R ON U.id = R.id";
$regularResult = mysqli_query($conn, $regularSql);
$regularUsers = mysqli_fetch_all($regularResult, MYSQLI_ASSOC);

// Calculate the count of regular users
$total_regular_users = count($regularUsers);

// Fetch all administrators from the Admin table
$adminSql = "SELECT U.*, A.in_dienst FROM User U INNER JOIN Admin A ON U.id = A.id";
$adminResult = mysqli_query($conn, $adminSql);
$administrators = mysqli_fetch_all($adminResult, MYSQLI_ASSOC);

// Calculate the count of administrators
$total_administrators = count($administrators);

$search = isset($_GET['search']) ? $_GET['search'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

// Modify the SQL query based on the search and sort options
$sql = "SELECT * FROM User WHERE voor_name LIKE '%$search%' OR achter_name LIKE '%$search%'";

if ($sort === 'name') {
    $sql .= " ORDER BY voor_name ASC";
} else if ($sort === 'date_added') {
    $sql .= " ORDER BY id ASC";
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>User Overzicht</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>
    <div>
        <h1>User Overzicht</h1>

        <div class="statistics">
            <h2>Statistieken</h2>
            <p>In totaal hebben wij: <?php echo $total_users; ?> geregistreerde gebruikers.</p>
            <p>Geregistreerde gebruikers per soort gebruiker:</p>
            <ul>
                <li>Administrators: <?php echo $total_administrators; ?></li>
                <li>Managers: <?php echo $total_managers; ?></li>
                <li>Regular Users: <?php echo $total_regular_users; ?></li>
            </ul>
        </div>

        <form method="GET">
            <input type="text" name="search" placeholder="Search by name">
            <select name="sort">
                <option value="">Sort by</option>
                <option value="name">Name</option>
                <option value="date_added">Date Added</option>
            </select>
            <button type="submit">Search & Sort</button>
        </form>

        <div class="users-section">
            <h2>Administrators</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Geslacht</th>
                    <th>Email</th>
                    <th>Gebruikersnaam</th>
                    <th>Huisnummer</th>
                    <th>Postcode</th>
                    <th>Straat</th>
                    <th>Land</th>
                    <th>Telefoonnummer</th>
                    <th>In Dienst</th>
                </tr>
                <?php foreach ($administrators as $admin) { ?>
                    <tr>
                        <td><?php echo $admin['id']; ?></td>
                        <td><?php echo $admin['voor_name']; ?></td>
                        <td><?php echo $admin['tussenvoessels']; ?></td>
                        <td><?php echo $admin['achter_name']; ?></td>
                        <td><?php echo $admin['geslacht']; ?></td>
                        <td><?php echo $admin['email']; ?></td>
                        <td><?php echo $admin['username']; ?></td>
                        <td><?php echo $admin['huisnummer']; ?></td>
                        <td><?php echo $admin['postcode']; ?></td>
                        <td><?php echo $admin['straat']; ?></td>
                        <td><?php echo $admin['land']; ?></td>
                        <td><?php echo $admin['telefoonnummer']; ?></td>
                        <td><?php echo $admin['in_dienst']; ?></td>
                    </tr>
                <?php } ?>
            </table>

            <h2>Managers</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Geslacht</th>
                    <th>Email</th>
                    <th>Gebruikersnaam</th>
                    <th>Huisnummer</th>
                    <th>Postcode</th>
                    <th>Straat</th>
                    <th>Land</th>
                    <th>Telefoonnummer</th>
                    <th>Afdeling</th>
                </tr>
                <?php foreach ($managers as $manager) { ?>
                    <tr>
                        <td><?php echo $manager['id']; ?></td>
                        <td><?php echo $manager['voor_name']; ?></td>
                        <td><?php echo $manager['tussenvoessels']; ?></td>
                        <td><?php echo $manager['achter_name']; ?></td>
                        <td><?php echo $manager['geslacht']; ?></td>
                        <td><?php echo $manager['email']; ?></td>
                        <td><?php echo $manager['username']; ?></td>
                        <td><?php echo $manager['huisnummer']; ?></td>
                        <td><?php echo $manager['postcode']; ?></td>
                        <td><?php echo $manager['straat']; ?></td>
                        <td><?php echo $manager['land']; ?></td>
                        <td><?php echo $manager['telefoonnummer']; ?></td>
                        <td><?php echo $manager['department']; ?></td>
                    </tr>
                <?php } ?>
            </table>

            <h2>Regular Users</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Geslacht</th>
                    <th>Email</th>
                    <th>Gebruikersnaam</th>
                    <th>Huisnummer</th>
                    <th>Postcode</th>
                    <th>Straat</th>
                    <th>Land</th>
                    <th>Telefoonnummer</th>
                    <th>Datum</th>
                </tr>
                <?php foreach ($regularUsers as $user) { ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['voor_name']; ?></td>
                        <td><?php echo $user['tussenvoessels']; ?></td>
                        <td><?php echo $user['achter_name']; ?></td>
                        <td><?php echo $user['geslacht']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['huisnummer']; ?></td>
                        <td><?php echo $user['postcode']; ?></td>
                        <td><?php echo $user['straat']; ?></td>
                        <td><?php echo $user['land']; ?></td>
                        <td><?php echo $user['telefoonnummer']; ?></td>
                        <td><?php echo $user['datum']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    <?php include 'footer.php'; ?>
</body>

</html>
