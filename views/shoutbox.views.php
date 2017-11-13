<h2>Chatbox</h2>
<div id="chatbox">
<?php
    // Chat
    foreach ($getChat as $thisQuery) { // Exécuter $getNews sous le tableau $thisQuery
    $c_author = "<b>".ucfirst(htmlspecialchars(getUserById($thisQuery["user_id"])))."</b>";
    $c_message = htmlspecialchars($thisQuery["message"]);
    $c_date = "<i>".$thisQuery["datepost"]."</i>";
    echo 
    "       <p class=\"chatmsg\">"."<span class=\"chatdate\">[".$c_date."]</span> ".$c_author." > ".$c_message."</p>
    ";
    }
?>
</div>
<?php
    $logged = $_SESSION["logged"];
    if ($logged == 1) { ?>
    <form id="chatbox" action="./" method="post" autocomplete="off">
        <input id="chat_message" class="chatform" type="text" name="chat_message" placeholder="Répondre">
        <input type="submit">
    </form>
    <?php }