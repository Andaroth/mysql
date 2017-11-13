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
        $userFeedback = "Tu es bien déconnecté.";
    }
}

if ((isset($_POST["news_title"])) && 
    ($_POST["news_title"] != "") &&
    (isset($_POST["news_content"])) && 
    ($_POST["news_content"] != "") &&
    (isset($_SESSION["auth"])) ) 
    {
        $title = addslashes(htmlspecialchars($_POST["news_title"]));
        $content = addslashes($_POST["news_content"]);
        $auth = $_SESSION["auth"];
        addNews($title,$content,$auth);
        $userFeedback = "News ajoutée avec succès !";
    } 

if ((isset($_POST["chat_message"])) &&
    (isset($_SESSION["logged"])) &&
    ($logged == 1) ) 
    {
        $user_id = intval($_SESSION["user_id"]);
        $message = htmlspecialchars($_POST["chat_message"]);
        if (strlen($_POST["chat_message"]) > 3) {
            addChat(intval($user_id),$message);
        } else { $userFeedback = "Pas de spam (3 chars min)"; }
    }

?>