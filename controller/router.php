<?php
$uri = explode("/", $_SERVER["REQUEST_URI"]);
$page = $uri[2] != "" ? $uri[2] : "homepage";
$view = "./views/" . $page . ".views.php";
if (file_exists($view))  {
    $getPage = $view;
}
else {
    $getPage = "./views/homepage.views.php";
}
include($getPage);
?>