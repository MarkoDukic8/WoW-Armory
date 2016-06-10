<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WoW Armory</title>
    <link href="css/template.css" rel="stylesheet">
</head>

<body>
<h1>
    Prijava


<p>

    <?php

    if(isset($_GET['login'])) {
        echo('Krivo korisnicko ime ili lozinka!');
    }

    ?>

<form action="login_check.php" method="post">
    Korisnicko ime:<br>
    <input type="text" name="username"><br>
    Lozinka:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Prijava">
</form>
</p>
</h1>
</body>
</html>