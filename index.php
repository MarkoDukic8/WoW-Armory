<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WoW Armory</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Početna</a></li>
                <li class="active"><a href="login.php">Odjava</a></li>
                <li class="active"><a href="unos.php">Unos novog charactera</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Characters</h1>
        <p class="lead">Aplikacija za WoW Armory.</p>
    </div>

    <div>
        <p>
            <?php

            $sql = "SELECT * FROM Characters";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                echo('<tr><th>character_name</th><th>class</th><th>race</th><th>realm</th></tr>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    //echo "id: " . $row["id"]. " - registracija: " . $row["registracija"]. " -> " . $row["ime"]. "<br>";
                    echo('<td>' . $row['character_name'] . '</td>');
                    echo('<td>' . $row['class'] . '</td>');
                    echo('<td>' . $row['race'] . '</td>');
                    echo('<td>' . $row['realm'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('<td>' . '<a href="edit.php?id=' . $row['id'] . '"><img src="img/edit.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "Nema charactera";
            }
            $conn->close();
            ?>
        </p>
    </div>

</div><!-- /.container -->


</body>
</html>
