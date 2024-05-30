<?php
include ("database/db_connect.php");
echo "username: " . $user;
echo "<br>";
echo "password: " . $pass;
echo "<br>";
print_r($_SESSION['login']);

if(isset($_POST['login'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];
    if($gebruikersnaam == $user && $wachtwoord == $pass) {
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
    <title>test login</title>
</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<body>
    <form method="post">
        <input type="text" name="gebruikersnaam">
        <input type="text" name="wachtwoord">
        <input type="submit" name="login">
    </form>
</body>

</html>