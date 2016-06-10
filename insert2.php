<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WoW Armory</title>
    <link href="css/template.css" rel="stylesheet">
</head>

<body>
<h1>
    Registracija
</h1>

<p>
    <?php
    $sql = "INSERT INTO users (username, password, name, surname) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['name'] . "', '" . $_POST['surname'] . "')";
    $result = $conn->query($sql);

    echo('Registracija je uspjesna!<br>');
    ?>
<form action="index.php" method="post">
    <input type="submit" value="Povratak na pocetnu">
</form>
</p>
</body>
</html>