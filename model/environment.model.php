<?php
/* Global environment */
$dbhost = "localhost";
$dbname = "becode_exo";
$dbuser = "becodesql";
$dbpass = "becodeorg";

/* Includes and require */
require_once("./model/connect.model.php");

/* Functions */
function addUser($username,$email,$pass) {
    global $db;
    $pass = hash('sha256',$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $do = "INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$email."','".$pass."')";
    try {
        $db->exec($do);
    } catch(Exception $e) {echo("Error : ".$e->getMessage());die();}
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