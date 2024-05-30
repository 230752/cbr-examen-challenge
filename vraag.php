<?php
include('database/db_connect.php');
if (isset($_POST['optie'])) {
    $optie = $_POST['optie'];
    if ($optie == $antwoord) {
        $_SESSION['vraag'] += 1;
        $_SESSION['punten'] += 1;
    } else {
        $_SESSION['vraag'] += 1;
    }
    header("location: vraag.php");
}

if ($_SESSION['vraag'] >= 15) {
    header("location: geslaagd.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vraag.css">
    <title>CBRTheorie</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-bar">
                <div class="nav-title">
                    <h1 class="title">CBRTheorie</h1>
                </div>
                <div class="nav-login">
                    <button class="login-button">
                        <div style="display: flex; align-items: center">
                            <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <circle id="a" cx="18" cy="18" r="18" />
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <use fill="#0588F0" xlink:href="#a" />
                                    <g stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M9.596 26.506c0-4.673 3.839-6.577 8.574-6.577 4.735 0 8.574 1.904 8.574 6.577H9.596zM22.127 12.366a4.28 4.28 0 0 0-4.287-4.275 4.28 4.28 0 0 0-4.287 4.275 4.28 4.28 0 0 0 4.287 4.275 4.28 4.28 0 0 0 4.287-4.275z" />
                                    </g>
                                </g>
                            </svg>
                            <span>Mijn CBR (Inloggen)</span>
                        </div>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="item">
                <h2>Vraag <?= $id ?></h2>
                <img class="image" src="<?= $image ?>" alt="Image">
                <p class="question"><?= $question ?></p>
                <div class="options-container">
                    <form method="post">
                        <button id="optie" class="button-answer" name="optie" value="gas loslaten">Gas loslaten</button>
                        <button id="optie" class="button-answer" name="optie" value="remmen">Remmen</button>
                        <button id="optie" class="button-answer" name="optie" value="gas geven">Gas geven</button>
                        <button id="optie" class="button-answer" name="optie" value="niets">Niets</button>
                    </form>
                </div>
                <div class="button-page">
                    <button class="button-back">Vorige</button>
                    <button class="button-forward">Volgende</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
