<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"  href="layout.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'main.php'; ?>
    
    <div class="container">
        <h2>Login</h2>
        <form action="verwerk-inloggen.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Wat is uw Role:</label>
                <select name="role" required>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="Regular">Regular</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
