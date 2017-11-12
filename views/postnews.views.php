<?php
   $_SESSION["auth"] = intval(getAuthLevel($_SESSION["username"]));
    $auth = $_SESSION["auth"];
    if ($auth > 0) { ?>
    <form action="./" method="post" autocomplete="off">
        <h2>Ajouter une news</h2>
        <input id="news_title" class="newsform" type="text" name="news_title" placeholder="Choisissez un titre">
        <textarea id="news_content" class="newsform" type="longtext" name="news_content" placeholder="Saisissez le texte de votre news."></textarea>
        <input type="submit">
        
    </form>
    <?php }