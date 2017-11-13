<?php
/* Includes and require */
require_once("./model/conf.model.php"); // Conf first
require_once("./controller/connect.php");
require_once("./controller/functions.php");
require_once("./controller/getpost.php");

/* Global queries */
$getNews = $db->query("SELECT * FROM my_news ORDER BY date DESC LIMIT 5");
$getChat = $db->query("SELECT * FROM shoutbox ORDER BY datepost DESC LIMIT 10");