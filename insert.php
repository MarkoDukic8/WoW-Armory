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
    Characters
</h1>

<p>
    <?php
    $sql = "INSERT INTO Characters (character_name, class, race, realm) VALUES ('" . $_POST['character_name'] . "', '" . $_POST['class'] . "', '" . $_POST['race'] . "', '" . $_POST['realm'] . "')";
    $result = $conn->query($sql);

    echo('Character je unesen!<br>');
    ?>
<form action="unos.php" method="post">
    <input type="submit" value="Unesite drugog charactera">
</form><form action="index.php" method="post">
    <input type="submit" value="Povratak na pocetnu">
</form>
</p>
</body>
</html>