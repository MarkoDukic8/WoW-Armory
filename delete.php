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
    $sql = "DELETE FROM Characters WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    echo('Character je obrisan!<br>');
    ?>
<form action="index.php" method="post">
    <input type="submit" value="Povratak na pocetnu">
</form>
</p>
</body>
</html>