<?php
session_start();

if ((isset($_SESSION["logged"])) && 
    (isset($_SESSION["username"]))) {
    $logged = $_SESSION["logged"];
    $loggedusername = $_SESSION["username"];
} else {
    $logged = 0;
}

if ((isset($_GET["deco"])) && 
    ($_GET["deco"] == "Se déconnecter")) {
    if ($logged == 1) {
        $logged = 0;
        session_destroy();
        $userFeedback = "<p>Tu es bien déconnecté.</p>";
    }
}

if ((isset($_POST["news_title"])) && 
    ($_POST["news_title"] != "") &&
    (isset($_POST["news_content"])) && 
    ($_POST["news_title"] != "") &&
    (isset($_SESSION["auth"])) ) 
    {
        $title = addslashes(htmlspecialchars($_POST["news_title"]));
        $content = addslashes($_POST["news_content"]);
        $auth = $_SESSION["auth"];
        addNews($title,$content,$auth);
        $userFeedback = "<p>News ajoutée avec succès !</p>";
    }

?>