<?php
/* Functions */
function addUser($username,$mail,$pass) {
    global $db;
    $do = "INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')";
    try {
        $db->exec($do);
    } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}
}

function getAuthLevel($username) {
    global $db;
    $do = "SELECT auth FROM my_users WHERE username = '".$username."'";
    try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
    } catch(Exception $e) {echo("Error getAuthLevel : ".$e->getMessage());die();}
}

function addNews($title,$content,$auth) {
    if ($auth > 0) {
        global $db;
        $do = "INSERT INTO my_news (title,content) VALUES ('".$title."','".$content."')";
        try {
            $db->exec($do);
        } catch(Exception $e) {echo("Error addNews : ".$e->getMessage());die();}
    } else{echo "<p>Cheatin !</p>"; }
}
?>