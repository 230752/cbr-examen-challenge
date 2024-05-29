<?php
session_start();

/**
 * Voor de MAC gebruikers;
 */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "root";
// $dbname = "webdev_base";

/**
 * Voor de Windows gebruikers;
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cbr_examen";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}

define("BASEURL","http://localhost/cbr-examen/cbr-examen-challenge/vragen.php");
define("BASEURL_CMS","http://localhost/module-4-1-crud-wdv-230752/admin/");

function prettyDump ( $var ) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}