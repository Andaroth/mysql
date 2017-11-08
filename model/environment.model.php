<?php
/* Global environment */
$dbhost = "localhost";
$dbname = "becode_exo";
$dbuser = "becodesql";
$dbpass = "becodeorg";

$userError = "";

/* Includes and require */
require_once("./model/connect.model.php");
require_once("./model/session.model.php");
require_once("./model/class.model.php");

/* Global queries */
$getNews = $db->query("SELECT * FROM my_news ORDER BY date DESC LIMIT 10");

?>