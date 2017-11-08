<!DOCTYPE html>
<?php include("./model/environment.model.php"); ?>
<html lang="fr">
    <?php include("./views/head.views.php"); ?>
<body>
    <?php echo $userError; ?>
    <h1>Anda Private Blog</h1>
        <p>Page privée des news</p>
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
</body>
</html>