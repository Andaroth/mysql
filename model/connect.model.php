<?php

try {
    $db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8", $dbuser, $dbpass);
} catch(Exception $e) {echo("DB conf is like your life. It's wrong.");die();}

?>