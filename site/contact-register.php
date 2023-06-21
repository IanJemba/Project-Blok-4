<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Person Form</title>
  <link rel="stylesheet" href="layout.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <?php include 'main.php'; ?>

  <div class="container">
    <h1>Contact Person Form</h1>

    <form action="verwerk-register.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
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
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="notitie">Notitie:</label>
        <textarea id="notitie" name="notitie"></textarea>
      </div>
      <div class="form-group">
        <label for="toevoegdatum">Toevoegdatum:</label>
        <input type="date" id="toevoegdatum" name="toevoegdatum" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>