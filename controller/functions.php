<?php
/* Functions */

// Ajouter user dans DB
function addUser($username,$mail,$pass) {
    global $db;
    try {
        $db->exec("INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')");
    } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}
}
// Récupérer admin level du user
function getAuthLevel($username) {
    global $db;
    $do = "SELECT auth FROM my_users WHERE username = '".$username."'";
    try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
    } catch(Exception $e) {echo("Error getAuthLevel : ".$e->getMessage());die();}
}
// Récup l'ID du user
function getUserId($username) {
    global $db;
    $do = "SELECT ID FROM my_users WHERE username = '".$username."'";
    try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
    } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();}
}
// Récup date dernier message
function getTimePost($user_id) {
    global $db;
    $do = "SELECT datepost FROM shoutbox WHERE user_id = '".$user_id."' ORDER BY id DESC";
    try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
    } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();}
}
// Récup le User par son ID
function getUserById($thisID) {
    global $db;
    $do = "SELECT username FROM my_users WHERE ID = '".$thisID."'";
    try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
    } catch(Exception $e) {echo("Error getUserById : ".$e->getMessage());die();}
}
// Ajouter news dans DB
function addNews($title,$content,$auth) {
    if ($auth > 0) {
        global $db;
        try {
            $db->exec("INSERT INTO my_news (title,content) VALUES ('".$title."','".$content."')");
        } catch(Exception $e) {echo("Error addNews : ".$e->getMessage());die();}
    } else{echo "<p>Cheatin !</p>"; }
}
// Ajouter tchat dans DB
function addChat($user_id,$message) {
    global $db;
    $message = htmlspecialchars($message);
    $nowTime = new DateTime();
    $nowTime = $nowTime->getTimestamp();
    $lastTime = getTimePost($user_id);
    $lastTime = strtotime($lastTime);
    $validateTime = $nowTime - $lastTime;
    echo "Écart entre le dernier post et now : ".$validateTime."<br>";
    if ($validateTime > 3000) {
        try {
            $db->exec("INSERT INTO shoutbox (user_id,message) VALUES ('".$user_id."','".$message."')");
        } catch(Exception $e) {echo("Error addChat : ".$e->getMessage());die();}
    } else { $userFeedback = "10 secondes minimum entre chaque message."; }
}
?>