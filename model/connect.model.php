<?php

try {
    $database = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8", $dbuser, $dbpass);
} catch(Exception $e) {echo("DB id are wrong");die();}

?>