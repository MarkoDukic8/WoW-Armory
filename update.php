<?php require('db.php'); ?>
<?php require('check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Characters</title>
</head>

<body>
<h1>
    Characters
</h1>

<p>
    <?php
    $sql = "UPDATE Characters SET character_name='" . $_POST['character_name'] . "', class='" . $_POST['class'] . "', race='" . $_POST['race'] . "', realm='" . $_POST['realm'] . "' WHERE id = " . $_POST['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>
</p>
</body>
</html>