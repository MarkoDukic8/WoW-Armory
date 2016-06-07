<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WoW Amory</title>
</head>

<body>
<h1>
    Characters
</h1>

<p>
<form action="insert.php" method="post">
    character_name:<br>
    <input type="text" name="character_name"><br>
    class:<br>
    <input type="text" name="class"><br>
    race:<br>
    <input type="text" name="race"><br>
    realm:<br>
    <input type="text" name="realm"><br>
    <input type="submit" value="Unesi character-a">
</form>
</p>

<p>
    <a href="unos.php">Unos novog character-a</a>
</p>
</body>
</html>