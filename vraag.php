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
    <h1>Vraag:"<?=$id ?>"</h1>

    <div class="item">
        <div class="vraagtitel">
            <h2>Vraag 1</h2>
        </div>
    <div class="image">
    <img src="<?=$image ?>" alt="">
    </div>
    <div class="vraag">
        <p><?=$question?></p>
    </div>
    <div class="opties">
        <button id="optie">Optie 1</button>
        <button id="optie">Optie 2</button>
        <button id="optie">Optie 3</button>
        <button id="optie">Optie 4</button>
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