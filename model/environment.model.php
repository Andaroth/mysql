<?php
/* Global environment */
$dbhost = "localhost";
$dbname = "becode_exo";
$dbuser = "becodesql";
$dbpass = "becodeorg";

$getNews = "'SELECT * FROM my_news LIMIT 5'";

require_once("./model/connect.model.php");

if (isset($_SESSION["logged"])) {
    $logged = $_SESSION["logged"];
} else {
    $logged = false;
}

?>