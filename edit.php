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

<?php
$sql = "SELECT * FROM Characters WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$wow = $result->fetch_assoc();
?>
<p>

<form action="update.php" method="post">
    character_name:<br>
    <input type="text" name="character_name" value="<?php echo($wow['character_name']); ?>"><br>
    class:<br>
    <input type="text" name="class" value="<?php echo($wow['class']); ?>"><br>
    race:<br>
    <input type="text" name="race" value="<?php echo($wow['race']); ?>"><br>
    realm:<br>
    <input type="text" name="realm" value="<?php echo($wow['realm']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($wow['id']); ?>">
    <input type="submit" value="Izmijeni charactera">
</form>
</p>

<p>
    <a href="unos.php">Unos novog charactera</a>
</p>
</body>
</html>