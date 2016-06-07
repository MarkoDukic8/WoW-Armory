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
    $sql = "DELETE FROM Characters WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    echo('Character je obrisan!<br>');
    echo('<a href="index.php">Povratak na prikaz charactera</a>');
    ?>
</p>
</body>
</html>