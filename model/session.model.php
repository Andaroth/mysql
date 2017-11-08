<?php
session_start();

if ((isset($_SESSION["logged"])) && (isset($_SESSION["username"]))) {
    $logged = $_SESSION["logged"];
    $loggedusername = $_SESSION["username"];
} else {
    $logged = 0;
}

if ( (isset($_GET["deco"])) && ($_GET["deco"] == "LogOut")) {
    if ($logged == 1) {
        $logged = 0;
        session_destroy();
        $userError = "<p>Tu es bien déconnecté.</p>";
    }
}

if ($logged == 1) {
    
}

?>