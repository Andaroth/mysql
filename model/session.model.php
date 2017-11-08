<?php
session_start();

if (isset($_SESSION["logged"])) {
    $logged = $_SESSION["logged"];
} else {
    $logged = 0;
}

if ( (isset($_GET["deco"])) && ($_GET["deco"] == "LogOut")) {
    if ($logged == 1) {
        $logged = 0;
        session_destroy();
        echo "<p>Tu es bien déconnecté.</p>";
    }
}

if ($logged == 1) {
    
}

?>