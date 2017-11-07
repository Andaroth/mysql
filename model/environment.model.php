<?php
/* Global environment */
$dbhost = "localhost";
$dbname = "becode_exo";
$dbuser = "becodesql";
$dbpass = "becodeorg";

/* Includes and require */
require_once("./model/connect.model.php");

/* Functions */
function addUser($username,$mail,$pass) {
    global $db;
    $pass = hash("sha256",$pass);
    $do = "INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')";
    try {
        $db->exec($do);
    } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}
}

/* Global queries */
$getNews = $db->query("SELECT * FROM my_news ORDER BY date DESC LIMIT 10");

/* Usable global var */
if (isset($_SESSION["logged"])) {
    $logged = $_SESSION["logged"];
} else {
    $logged = false;
}

?>