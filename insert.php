<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WoW Armory</title>
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
    echo('<a href="index.php">Povratak na prikaz charactera</a>');
    ?>
</p>
</body>
</html>