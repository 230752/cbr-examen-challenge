<?php
include("database/db_connect.php");
if ($_SESSION['login'] == true) {
    header("location: index.php");
}

if (isset($_POST['login'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];
    if ($gebruikersnaam == $user && $wachtwoord == $pass) {
        $_SESSION['login'] = true;
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>test login</title>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body>
    <div class="container">
        <div class="content">
            <form method="post">
                <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam">
                <?php
                echo "(" . $user . ")";
                ?>
                <br><br>
                <input type="text" name="wachtwoord" placeholder="Wachtwoord">
                <?php
                echo "(" . $pass . ")";
                ?>
                <br><br>
                <input type="submit" name="login" value="Inloggen" class="inloggen">
            </form>
        </div>
    </div>
</body>

</html>
