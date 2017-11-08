<?php
/* Functions */
function addUser($username,$mail,$pass) {
    global $db;
    $do = "INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')";
    try {
        $db->exec($do);
    } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}
}
?>