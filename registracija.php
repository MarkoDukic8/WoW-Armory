<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WoW Amory</title>
    <link href="css/template.css" rel="stylesheet">
</head>

<body>
<h1>
    Novi profil


<p>
<form action="insert2.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    password:<br>
    <input type="text" name="password"><br>
    name:<br>
    <input type="text" name="name"><br>
    surname:<br>
    <input type="text" name="surname"><br>
    <input type="submit" value="Registracija">
</form>
</p>
</h1>
<p>
    <a href="index.php">Povratak na pocetnu.</a>
</p>
</body>
</html>