<?php
$uri = explode("/", $_SERVER["REQUEST_URI"]); // Récupérer tout ce qu'il y a après le caractère "/"
$page = $uri[2] != "" ? $uri[2] : "homepage";  // En faire une variable ("homepage" si vide)
$view = "./views/" . $page . ".views.php"; // On va utiliser la variable pour cibler la view
if (count($uri) > 3) { // Redirection si l'utilisateur veut aller dans une arborescence trop profonde
    header("Location: http://".$_SERVER['HTTP_HOST']."/becode_mysql/");
}
else if (!(file_exists($view)))  { // Si la view n'existe pas, on donne la homepage
    $getPage = "./views/homepage.views.php";
}
else { // Si tout est OK
    $getPage = $view;
}
// Ensuite on lance l'index des views
require("./views/index.views.php"); 
?>