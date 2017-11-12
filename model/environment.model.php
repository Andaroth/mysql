<?php
/* Includes and require */
require_once("./model/conf.model.php"); // Conf first
require_once("./model/connect.model.php");
require_once("./model/functions.model.php");
require_once("./model/getpost.model.php");

/* Global queries */
$getNews = $db->query("SELECT * FROM my_news ORDER BY date DESC LIMIT 5");
