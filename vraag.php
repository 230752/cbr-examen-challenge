<?php
include ('database/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vraag.css">
    <title>Document</title>
</head>

<body>
    <div class="item">
        <div class="vraagtitel">
            <h2>Vraag <?=$id?></h2>
        </div>
        <div class="image">
            <img src="<?= $image ?>" alt="noimg">
        </div>
        <div class="vraag">
            <p><?= $question ?></p>
        </div>
        <div class="opties">
            <button id="optie" value="gaslos">Gas loslaten</button>
            <button id="optie" value="remmen">Remmen</button>
            <button id="optie" value="gassen">Gas geven</button>
            <button id="optie" value="niets">Niets</button>
        </div>
    </div>

</body>
<footer>
    <div class="pagebuttons">
        <button class="pagebutton">vorige</button>
        <button class="pagebutton">Volgende</button>
    </div>
</footer>

</html>