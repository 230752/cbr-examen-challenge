<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cbr_examen";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

define("BASEURL", "http://localhost/cbr-examen/cbr-examen-challenge/vragen.php");

function prettyDump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

if(!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
    $_SESSION['finished'] = false;
}

if (!isset($_SESSION['vraag'])) {
    $_SESSION['vraag'] = 1;
    $_SESSION['punten'] = 0;
}

$sqli_prepare = $con->prepare("SELECT id, question, image, answer FROM auto_examen WHERE id = ?;");
$sqli_prepare->bind_param("i", $_SESSION['vraag']);
$sqli_prepare->execute();
$sqli_prepare->bind_result($id, $question, $image, $antwoord);
$sqli_prepare->fetch();
$sqli_prepare->close();

$sqli_prepare = $con->prepare("SELECT id, gebruikersnaam, wachtwoord FROM accounts");
$sqli_prepare->execute();
$sqli_prepare->bind_result($userid, $user, $pass);
$sqli_prepare->fetch();
$sqli_prepare->close();