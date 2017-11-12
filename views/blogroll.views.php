<?php
// Si l'utilisateur est connecté
 if ($logged == 1) { $userFeedback = "Connecté en tant que ".$loggedusername; // Lui indiquer son pseudo
// Charger les news
foreach ($getNews as $thisQuery) { // Exécuter $getNews sous le tableau $thisQuery
    $n_title = htmlspecialchars($thisQuery["title"]);
    $n_content = $thisQuery["content"];
    $n_date = $thisQuery["date"];
    echo 
"    <article class=\"news\">
".
"        <h2>".$n_title."</h2>
".
"        ".$n_content."
".
"        <div class=\"date\">Date: ".$n_date."</div>
".
"    </article>
";
    
} // Fin du loader de news. On affiche un bouton pour se déconnecter
?>
 <form action="./" method="get"><input type="submit" name="deco" value="Se déconnecter"></form>
<?php 
} else {
include("./views/homepage.views.php");
} 
